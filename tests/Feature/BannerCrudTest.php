<?php

namespace Tests\Feature;

use App\Models\Banner;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class BannerCrudTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->actingAs(User::factory()->create());
    }

    public function test_admin_can_view_banners_list(): void
    {
        Banner::factory()->count(3)->create();

        $response = $this->get(route('admin.banners.index'));

        $response->assertStatus(200);
        $response->assertSee('Banners List');
    }

    public function test_banners_list_is_paginated(): void
    {
        Banner::factory()->count(20)->create();

        $response = $this->get(route('admin.banners.index'));

        $response->assertStatus(200);
    }

    public function test_admin_can_create_banner(): void
    {
        Storage::fake('public');

        $image = UploadedFile::fake()->image('banner.jpg');

        $data = [
            'title' => 'Test Banner',
            'description' => 'Test Description',
            'button_text' => 'Learn More',
            'button_link' => 'https://example.com',
            'image' => $image,
            'status' => 'active',
        ];

        $response = $this->post(route('admin.banners.store'), $data);

        $response->assertRedirect();
        $this->assertDatabaseHas('banners', ['title' => 'Test Banner']);
    }

    public function test_banner_creation_validates_required_fields(): void
    {
        $response = $this->post(route('admin.banners.store'), []);

        $response->assertSessionHasErrors(['title', 'image', 'status']);
    }

    public function test_admin_can_view_banner_edit_page(): void
    {
        $banner = Banner::factory()->create();

        $response = $this->get(route('admin.banners.edit', $banner->id));

        $response->assertStatus(200);
    }

    public function test_admin_can_update_banner(): void
    {
        $banner = Banner::factory()->create(['title' => 'Old Title']);

        $response = $this->put(route('admin.banners.update', $banner->id), [
            'title' => 'New Title',
            'description' => $banner->description,
            'status' => $banner->status,
        ]);

        $response->assertRedirect();
        $this->assertEquals('New Title', $banner->fresh()->title);
    }

    public function test_admin_can_delete_banner(): void
    {
        $banner = Banner::factory()->create();
        $id = $banner->id;

        $response = $this->delete(route('admin.banners.destroy', $banner->id));

        $response->assertRedirect();
        $this->assertNull(Banner::find($id));
    }
}
