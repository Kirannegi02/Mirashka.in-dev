<?php

namespace Tests\Feature;

use App\Models\Podcast;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PodcastCrudTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->actingAs(User::factory()->create());
    }

    public function test_admin_can_view_podcasts_list(): void
    {
        Podcast::factory()->count(3)->create();

        $response = $this->get(route('admin.podcasts.index'));

        $response->assertStatus(200);
        $response->assertSee('podcast List');
    }

    public function test_podcasts_list_is_paginated(): void
    {
        Podcast::factory()->count(20)->create();

        $response = $this->get(route('admin.podcasts.index'));

        $response->assertStatus(200);
    }

    public function test_admin_can_create_podcast(): void
    {
        Storage::fake('public');

        $image = UploadedFile::fake()->image('podcast.jpg');
        $audio = UploadedFile::fake()->create('podcast.mp3', 5000);

        $data = [
            'tittle' => 'Test Podcast',
            'description' => 'Test Description',
            'publish_date' => '2026-04-01',
            'image' => $image,
            'audio' => $audio,
            'status' => 'active',
        ];

        $response = $this->post(route('admin.podcasts.store'), $data);

        $response->assertRedirect(route('admin.podcasts.index'));
        $this->assertDatabaseHas('podcast', ['tittle' => 'Test Podcast']);
    }

    public function test_podcast_creation_validates_required_fields(): void
    {
        $response = $this->post(route('admin.podcasts.store'), []);

        $response->assertSessionHasErrors(['tittle', 'publish_date', 'image', 'audio', 'status']);
    }

    public function test_admin_can_view_podcast_edit_page(): void
    {
        $podcast = Podcast::factory()->create();

        $response = $this->get(route('admin.podcasts.edit', $podcast->id));

        $response->assertStatus(200);
    }

    public function test_admin_can_update_podcast(): void
    {
        $podcast = Podcast::factory()->create(['tittle' => 'Old Title']);

        $response = $this->put(route('admin.podcasts.update', $podcast->id), [
            'tittle' => 'New Title',
            'description' => $podcast->description,
            'publish_date' => $podcast->publish_date,
            'status' => $podcast->status,
        ]);

        $response->assertRedirect(route('admin.podcasts.index'));
        $this->assertEquals('New Title', $podcast->fresh()->tittle);
    }

    public function test_admin_can_delete_podcast(): void
    {
        $podcast = Podcast::factory()->create();
        $id = $podcast->id;

        $response = $this->delete(route('admin.podcasts.destroy', $podcast->id));

        $response->assertRedirect(route('admin.podcasts.index'));
        $this->assertNull(Podcast::find($id));
    }
}
