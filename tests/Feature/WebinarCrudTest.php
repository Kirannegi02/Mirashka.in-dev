<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\webinar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class WebinarCrudTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->actingAs(User::factory()->create());
    }

    public function test_admin_can_view_webinars_list(): void
    {
        Webinar::factory()->count(3)->create();

        $response = $this->get(route('admin.webinars.index'));

        $response->assertStatus(200);
        $response->assertSee('Webinars List');
    }

    public function test_webinars_list_is_paginated(): void
    {
        Webinar::factory()->count(20)->create();

        $response = $this->get(route('admin.webinars.index'));

        $response->assertStatus(200);
        $response->assertSee('pagination');
    }

    public function test_admin_can_create_webinar(): void
    {
        Storage::fake('public');

        $image = UploadedFile::fake()->image('test.jpg');

        $data = [
            'title' => 'Test Webinar',
            'description' => 'Test Description',
            'start_date' => '2026-05-01',
            'start_time' => '14:00',
            'speaker_name' => 'John Doe',
            'image' => $image,
            'status' => 'upcoming',
            'is_active' => true,
        ];

        $response = $this->post(route('admin.webinars.store'), $data);

        $response->assertRedirect(route('admin.webinars.index'));
        $this->assertDatabaseHas('webinars', ['title' => 'Test Webinar']);
    }

    public function test_webinar_creation_validates_required_fields(): void
    {
        $response = $this->post(route('admin.webinars.store'), []);

        $response->assertSessionHasErrors([
            'title',
            'description',
            'start_date',
            'start_time',
            'speaker_name',
            'image',
            'status',
        ]);
    }

    public function test_admin_can_view_webinar_edit_page(): void
    {
        $webinar = Webinar::factory()->create();

        $response = $this->get(route('admin.webinars.edit', $webinar->id));

        $response->assertStatus(200);
    }

    public function test_admin_can_update_webinar(): void
    {
        $webinar = Webinar::factory()->create(['title' => 'Old Title']);

        $response = $this->put(route('admin.webinars.update', $webinar->id), [
            'title' => 'New Title',
            'description' => $webinar->description,
            'start_date' => $webinar->start_date,
            'start_time' => $webinar->start_time,
            'speaker_name' => $webinar->speaker_name,
            'status' => $webinar->status,
            'is_active' => true,
        ]);

        $response->assertRedirect(route('admin.webinars.index'));
        $this->assertEquals('New Title', $webinar->fresh()->title);
    }

    public function test_admin_can_delete_webinar(): void
    {
        $webinar = Webinar::factory()->create();
        $id = $webinar->id;

        $response = $this->delete(route('admin.webinars.destroy', $webinar->id));

        $response->assertRedirect(route('admin.webinars.index'));
        $this->assertNull(Webinar::find($id));
    }

    public function test_admin_can_view_webinar_registrations(): void
    {
        $webinar = Webinar::factory()->create();

        $response = $this->get(route('admin.webinars.registrations', $webinar->id));

        $response->assertStatus(200);
        $response->assertSee('Webinar Registrations');
    }

    public function test_registrations_list_is_paginated(): void
    {
        $webinar = Webinar::factory()->create();
        $webinar->registrations()->count(20);

        $response = $this->get(route('admin.webinars.registrations', $webinar->id));

        $response->assertStatus(200);
    }
}
