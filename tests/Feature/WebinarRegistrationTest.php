<?php

namespace Tests\Feature;

use App\Models\webinar;
use App\Models\WebinarRegistration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebinarRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_webinar_registration_form_submission_with_valid_data(): void
    {
        $webinar = Webinar::factory()->create([
            'status' => 'upcoming',
            'is_active' => true,
        ]);

        $response = $this->post(route('webinar.register'), [
            'webinar_id' => $webinar->id,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'company' => 'Test Company',
            'job_title' => 'CEO',
            'consent' => 'on',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('webinar_registrations', [
            'email' => 'john@example.com',
            'webinar_id' => $webinar->id,
        ]);
    }

    public function test_webinar_registration_validates_required_fields(): void
    {
        $response = $this->post(route('webinar.register'), []);

        $response->assertSessionHasErrors([
            'webinar_id',
            'name',
            'email',
            'phone',
            'consent',
        ]);
    }

    public function test_webinar_registration_validates_webinar_exists(): void
    {
        $response = $this->post(route('webinar.register'), [
            'webinar_id' => 999,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'consent' => 'on',
        ]);

        $response->assertSessionHasErrors('webinar_id');
    }

    public function test_webinar_registration_requires_consent(): void
    {
        $webinar = Webinar::factory()->create();

        $response = $this->post(route('webinar.register'), [
            'webinar_id' => $webinar->id,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
        ]);

        $response->assertSessionHasErrors('consent');
    }

    public function test_webinar_registration_creates_with_registered_status(): void
    {
        $webinar = Webinar::factory()->create();

        $this->post(route('webinar.register'), [
            'webinar_id' => $webinar->id,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'consent' => 'on',
        ]);

        $registration = WebinarRegistration::where('email', 'john@example.com')->first();
        $this->assertEquals('registered', $registration->status);
    }

    public function test_frontend_can_view_webinars(): void
    {
        Webinar::factory()->count(3)->create();

        $response = $this->get('/events-webinars');

        $response->assertStatus(200);
    }

    public function test_frontend_can_view_single_webinar(): void
    {
        $webinar = Webinar::factory()->create();

        $response = $this->get('/events-webinars/'.$webinar->id);

        $response->assertStatus(200);
    }

    public function test_frontend_can_filter_webinars_by_status(): void
    {
        Webinar::factory()->upcoming()->create();
        Webinar::factory()->past()->create();

        $response = $this->get('/webinars/filter/upcoming');

        $response->assertStatus(200);
    }
}
