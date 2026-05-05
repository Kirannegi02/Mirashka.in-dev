<?php

namespace Tests\Unit\Models;

use App\Models\webinar;
use App\Models\WebinarRegistration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebinarRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_webinar_registration_can_be_created(): void
    {
        $webinar = Webinar::factory()->create();
        $registration = WebinarRegistration::factory()->create([
            'webinar_id' => $webinar->id,
        ]);

        $this->assertDatabaseHas('webinar_registrations', [
            'id' => $registration->id,
            'email' => $registration->email,
        ]);
    }

    public function test_webinar_registration_belongs_to_webinar(): void
    {
        $webinar = Webinar::factory()->create();
        $registration = WebinarRegistration::factory()->create([
            'webinar_id' => $webinar->id,
        ]);

        $this->assertInstanceOf(Webinar::class, $registration->webinar);
        $this->assertEquals($webinar->id, $registration->webinar->id);
    }

    public function test_webinar_registration_mark_as_attended(): void
    {
        $registration = WebinarRegistration::factory()->create(['status' => 'registered']);

        $registration->markAsAttended();

        $this->assertEquals('attended', $registration->fresh()->status);
    }

    public function test_webinar_registration_mark_as_no_show(): void
    {
        $registration = WebinarRegistration::factory()->create(['status' => 'registered']);

        $registration->markAsNoShow();

        $this->assertEquals('no_show', $registration->fresh()->status);
    }

    public function test_webinar_registration_mark_email_sent(): void
    {
        $registration = WebinarRegistration::factory()->create();

        $registration->markEmailSent();

        $this->assertNotNull($registration->fresh()->email_sent_at);
    }

    public function test_webinar_registration_mark_reminder_sent(): void
    {
        $registration = WebinarRegistration::factory()->create();

        $registration->markReminderSent();

        $this->assertNotNull($registration->fresh()->reminder_sent_at);
    }

    public function test_webinar_registration_mark_email_failed(): void
    {
        $registration = WebinarRegistration::factory()->create();

        $registration->markEmailFailed('SMTP Error');

        $fresh = $registration->fresh();
        $this->assertEquals('failed', $fresh->email_status);
        $this->assertEquals('SMTP Error', $fresh->email_last_error);
    }

    public function test_webinar_registration_mark_email_retrying(): void
    {
        $registration = WebinarRegistration::factory()->create();

        $registration->markEmailRetrying();

        $this->assertEquals('retrying', $registration->fresh()->email_status);
    }

    public function test_webinar_registration_increment_attempts(): void
    {
        $registration = WebinarRegistration::factory()->create(['email_attempts' => 0]);

        $registration->incrementAttempts();

        $this->assertEquals(1, $registration->fresh()->email_attempts);
    }

    public function test_webinar_registration_reset_email_status(): void
    {
        $registration = WebinarRegistration::factory()->create([
            'email_status' => 'failed',
            'email_attempts' => 3,
            'email_last_error' => 'Error',
        ]);

        $registration->resetEmailStatus();

        $fresh = $registration->fresh();
        $this->assertEquals('pending', $fresh->email_status);
        $this->assertEquals(0, $fresh->email_attempts);
        $this->assertNull($fresh->email_last_error);
    }

    public function test_webinar_registration_registered_scope(): void
    {
        WebinarRegistration::factory()->count(2)->registered()->create();
        WebinarRegistration::factory()->attended()->create();
        WebinarRegistration::factory()->noShow()->create();

        $this->assertCount(2, WebinarRegistration::registered()->get());
    }

    public function test_webinar_registration_factory_creates_registered(): void
    {
        $registration = WebinarRegistration::factory()->registered()->create();

        $this->assertEquals('registered', $registration->status);
    }

    public function test_webinar_registration_factory_creates_attended(): void
    {
        $registration = WebinarRegistration::factory()->attended()->create();

        $this->assertEquals('attended', $registration->status);
    }

    public function test_webinar_registration_casts_email_sent_at_as_datetime(): void
    {
        $registration = WebinarRegistration::factory()->create([
            'email_sent_at' => now(),
        ]);

        $this->assertInstanceOf(\Carbon\Carbon::class, $registration->email_sent_at);
    }

    public function test_webinar_registration_casts_reminder_sent_at_as_datetime(): void
    {
        $registration = WebinarRegistration::factory()->create([
            'reminder_sent_at' => now(),
        ]);

        $this->assertInstanceOf(\Carbon\Carbon::class, $registration->reminder_sent_at);
    }
}
