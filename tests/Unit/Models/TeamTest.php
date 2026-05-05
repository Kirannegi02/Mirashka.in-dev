<?php

namespace Tests\Unit\Models;

use App\Models\Team;
use App\Models\TeamAchievement;
use App\Models\TeamGallery;
use App\Models\TeamSocialLink;
use App\Models\TeamVision;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TeamTest extends TestCase
{
    use RefreshDatabase;

    public function test_team_can_be_created(): void
    {
        $team = Team::factory()->create();

        $this->assertDatabaseHas('teams', [
            'id' => $team->id,
            'name' => $team->name,
        ]);
    }

    public function test_team_has_social_relationship(): void
    {
        $team = Team::factory()->create();
        TeamSocialLink::factory()->create(['team_id' => $team->id]);

        $this->assertInstanceOf(TeamSocialLink::class, $team->social);
    }

    public function test_team_has_vision_relationship(): void
    {
        $team = Team::factory()->create();
        TeamVision::factory()->create(['team_id' => $team->id]);

        $this->assertInstanceOf(TeamVision::class, $team->vision);
    }

    public function test_team_has_many_achievements(): void
    {
        $team = Team::factory()->create();
        TeamAchievement::factory()->count(3)->create(['team_id' => $team->id]);

        $this->assertCount(3, $team->achievements);
    }

    public function test_team_has_many_galleries(): void
    {
        $team = Team::factory()->create();
        TeamGallery::factory()->count(2)->create(['team_id' => $team->id]);

        $this->assertCount(2, $team->galleries);
    }

    public function test_team_factory_creates_active_team_member(): void
    {
        $team = Team::factory()->active()->create();

        $this->assertEquals(1, $team->status);
    }

    public function test_team_factory_creates_inactive_team_member(): void
    {
        $team = Team::factory()->inactive()->create();

        $this->assertEquals(0, $team->status);
    }

    public function test_team_can_update(): void
    {
        $team = Team::factory()->create(['name' => 'Old Name']);

        $team->update(['name' => 'New Name']);

        $this->assertEquals('New Name', $team->fresh()->name);
    }

    public function test_team_can_delete(): void
    {
        $team = Team::factory()->create();
        $id = $team->id;

        $team->delete();

        $this->assertNull(Team::find($id));
    }

    public function test_team_slug_auto_generated(): void
    {
        $team = Team::factory()->create(['name' => 'John Doe']);

        $this->assertEquals('john-doe', $team->slug);
    }
}
