<?php

namespace Tests\Feature;

use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class TeamCrudTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->actingAs(User::factory()->create());
    }

    public function test_admin_can_view_teams_list(): void
    {
        Team::factory()->count(3)->create();

        $response = $this->get(route('admin.teams.index'));

        $response->assertStatus(200);
        $response->assertSee('Team Members');
    }

    public function test_teams_list_is_paginated(): void
    {
        Team::factory()->count(20)->create();

        $response = $this->get(route('admin.teams.index'));

        $response->assertStatus(200);
    }

    public function test_admin_can_create_team_member(): void
    {
        Storage::fake('public');

        $image = UploadedFile::fake()->image('team.jpg');

        $data = [
            'name' => 'John Doe',
            'designation' => 'CEO',
            'description' => 'Test Description',
            'image' => $image,
            'status' => 1,
        ];

        $response = $this->post(route('admin.teams.store'), $data);

        $response->assertRedirect();
        $this->assertDatabaseHas('teams', [
            'name' => 'John Doe',
            'designation' => 'CEO',
        ]);
    }

    public function test_team_creation_validates_required_fields(): void
    {
        $response = $this->post(route('admin.teams.store'), []);

        $response->assertSessionHasErrors(['name', 'designation', 'status']);
    }

    public function test_admin_can_view_team_edit_page(): void
    {
        $team = Team::factory()->create();

        $response = $this->get(route('admin.teams.edit', $team->id));

        $response->assertStatus(200);
    }

    public function test_admin_can_update_team_member(): void
    {
        $team = Team::factory()->create(['name' => 'Old Name']);

        $response = $this->put(route('admin.teams.update', $team->id), [
            'name' => 'New Name',
            'designation' => $team->designation,
            'status' => $team->status,
        ]);

        $response->assertRedirect();
        $this->assertEquals('New Name', $team->fresh()->name);
    }

    public function test_admin_can_delete_team_member(): void
    {
        $team = Team::factory()->create();
        $id = $team->id;

        $response = $this->delete(route('admin.teams.destroy', $team->id));

        $response->assertRedirect();
        $this->assertNull(Team::find($id));
    }

    public function test_frontend_can_view_team_members(): void
    {
        Team::factory()->count(3)->active()->create();

        $response = $this->get('/leadership-team');

        $response->assertStatus(200);
    }

    public function test_frontend_can_view_single_team_member(): void
    {
        $team = Team::factory()->create(['slug' => 'john-doe']);

        $response = $this->get('/leadership-team/john-doe');

        $response->assertStatus(200);
    }
}
