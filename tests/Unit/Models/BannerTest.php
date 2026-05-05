<?php

namespace Tests\Unit\Models;

use App\Models\Banner;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BannerTest extends TestCase
{
    use RefreshDatabase;

    public function test_banner_can_be_created(): void
    {
        $banner = Banner::factory()->create();

        $this->assertDatabaseHas('banners', [
            'id' => $banner->id,
            'title' => $banner->title,
        ]);
    }

    public function test_banner_has_correct_fillable_attributes(): void
    {
        $banner = Banner::factory()->create([
            'title' => 'Test Banner',
            'status' => 'active',
        ]);

        $this->assertEquals('Test Banner', $banner->title);
        $this->assertEquals('active', $banner->status);
    }

    public function test_banner_factory_creates_active_banner(): void
    {
        $banner = Banner::factory()->active()->create();

        $this->assertEquals('active', $banner->status);
    }

    public function test_banner_factory_creates_disabled_banner(): void
    {
        $banner = Banner::factory()->disabled()->create();

        $this->assertEquals('disabled', $banner->status);
    }

    public function test_banner_can_update(): void
    {
        $banner = Banner::factory()->create(['title' => 'Old Title']);

        $banner->update(['title' => 'New Title']);

        $this->assertEquals('New Title', $banner->fresh()->title);
    }

    public function test_banner_can_delete(): void
    {
        $banner = Banner::factory()->create();
        $id = $banner->id;

        $banner->delete();

        $this->assertNull(Banner::find($id));
    }
}
