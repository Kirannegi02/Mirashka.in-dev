<?php

namespace Tests\Unit\Models;

use App\Models\Podcast;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PodcastTest extends TestCase
{
    use RefreshDatabase;

    public function test_podcast_can_be_created(): void
    {
        $podcast = Podcast::factory()->create();

        $this->assertDatabaseHas('podcast', [
            'id' => $podcast->id,
            'tittle' => $podcast->tittle,
        ]);
    }

    public function test_podcast_has_correct_fillable_attributes(): void
    {
        $podcast = Podcast::factory()->create([
            'tittle' => 'Test Podcast',
            'status' => 'active',
        ]);

        $this->assertEquals('Test Podcast', $podcast->tittle);
        $this->assertEquals('active', $podcast->status);
    }

    public function test_podcast_factory_creates_active_podcast(): void
    {
        $podcast = Podcast::factory()->active()->create();

        $this->assertEquals('active', $podcast->status);
    }

    public function test_podcast_factory_creates_disabled_podcast(): void
    {
        $podcast = Podcast::factory()->disabled()->create();

        $this->assertEquals('disabled', $podcast->status);
    }

    public function test_podcast_can_update(): void
    {
        $podcast = Podcast::factory()->create(['tittle' => 'Old Title']);

        $podcast->update(['tittle' => 'New Title']);

        $this->assertEquals('New Title', $podcast->fresh()->tittle);
    }

    public function test_podcast_can_delete(): void
    {
        $podcast = Podcast::factory()->create();
        $id = $podcast->id;

        $podcast->delete();

        $this->assertNull(Podcast::find($id));
    }
}
