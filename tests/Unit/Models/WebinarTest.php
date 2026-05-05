<?php

namespace Tests\Unit\Models;

use App\Models\webinar;
use App\Models\WebinarRegistration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebinarTest extends TestCase
{
    use RefreshDatabase;

    public function test_webinar_has_many_registrations(): void
    {
        $webinar = Webinar::factory()->create();
        WebinarRegistration::factory()->count(3)->create(['webinar_id' => $webinar->id]);

        $this->assertCount(3, $webinar->registrations);
    }

    public function test_webinar_registration_belongs_to_webinar(): void
    {
        $webinar = Webinar::factory()->create();
        $registration = WebinarRegistration::factory()->create(['webinar_id' => $webinar->id]);

        $this->assertEquals($webinar->id, $registration->webinar->id);
    }

    public function test_webinar_upcoming_scope_filters_upcoming_webinars(): void
    {
        Webinar::factory()->create([
            'status' => 'upcoming',
            'is_active' => true,
            'start_date' => now()->addDays(7),
        ]);

        Webinar::factory()->create([
            'status' => 'past',
            'is_active' => false,
            'start_date' => now()->subDays(7),
        ]);

        $this->assertCount(1, Webinar::upcoming()->get());
    }

    public function test_webinar_past_scope_filters_past_webinars(): void
    {
        Webinar::factory()->create([
            'status' => 'upcoming',
            'is_active' => true,
            'start_date' => now()->addDays(7),
        ]);

        Webinar::factory()->create([
            'status' => 'past',
            'is_active' => false,
            'start_date' => now()->subDays(7),
        ]);

        $this->assertCount(1, Webinar::past()->get());
    }

    public function test_webinar_active_scope_filters_active_webinars(): void
    {
        Webinar::factory()->create(['is_active' => true]);
        Webinar::factory()->create(['is_active' => false]);

        $this->assertCount(1, Webinar::active()->get());
    }

    public function test_webinar_formatted_date_accessor(): void
    {
        $webinar = Webinar::factory()->create([
            'start_date' => '2026-04-15',
        ]);

        $this->assertEquals('15 Apr, 2026', $webinar->formatted_date);
    }

    public function test_webinar_formatted_time_accessor_with_time(): void
    {
        $webinar = Webinar::factory()->create([
            'start_time' => '14:30:00',
        ]);

        $this->assertEquals('02:30 PM', $webinar->formatted_time);
    }

    public function test_webinar_formatted_time_accessor_without_time(): void
    {
        $webinar = Webinar::factory()->create([
            'start_time' => '00:00:00',
        ]);

        $this->assertEquals('12:00 AM', $webinar->formatted_time);
    }

    public function test_webinar_why_attend_list_attribute(): void
    {
        $webinar = Webinar::factory()->create([
            'why_attend' => ['Point 1', 'Point 2'],
        ]);

        $this->assertEquals(['Point 1', 'Point 2'], $webinar->why_attend_list);
    }

    public function test_webinar_features_list_attribute(): void
    {
        $webinar = Webinar::factory()->create([
            'features' => ['Feature 1', 'Feature 2'],
        ]);

        $this->assertEquals(['Feature 1', 'Feature 2'], $webinar->features_list);
    }

    public function test_webinar_what_you_get_list_attribute(): void
    {
        $webinar = Webinar::factory()->create([
            'what_you_get' => ['Benefit 1', 'Benefit 2'],
        ]);

        $this->assertEquals(['Benefit 1', 'Benefit 2'], $webinar->what_you_get_list);
    }

    public function test_webinar_casts_start_date_as_date(): void
    {
        $webinar = Webinar::factory()->create([
            'start_date' => '2026-04-15',
        ]);

        $this->assertInstanceOf(\Carbon\Carbon::class, $webinar->start_date);
    }

    public function test_webinar_casts_is_active_as_boolean(): void
    {
        $webinar = Webinar::factory()->create(['is_active' => 1]);
        $this->assertIsBool($webinar->is_active);
        $this->assertTrue($webinar->is_active);
    }

    public function test_webinar_casts_json_arrays(): void
    {
        $webinar = Webinar::factory()->create([
            'why_attend' => ['test'],
            'features' => ['test'],
            'what_you_get' => ['test'],
        ]);

        $this->assertIsArray($webinar->why_attend);
        $this->assertIsArray($webinar->features);
        $this->assertIsArray($webinar->what_you_get);
    }
}
