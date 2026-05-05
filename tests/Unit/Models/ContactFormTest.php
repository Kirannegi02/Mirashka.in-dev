<?php

namespace Tests\Unit\Models;

use App\Models\ContactForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_form_can_be_created(): void
    {
        $contactForm = ContactForm::factory()->create();

        $this->assertDatabaseHas('contact_forms', [
            'id' => $contactForm->id,
            'email' => $contactForm->email,
        ]);
    }

    public function test_contact_form_has_correct_fillable_attributes(): void
    {
        $contactForm = ContactForm::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'message' => 'Test message',
        ]);

        $this->assertEquals('John Doe', $contactForm->name);
        $this->assertEquals('john@example.com', $contactForm->email);
    }

    public function test_contact_form_mark_email_sent(): void
    {
        $contactForm = ContactForm::factory()->create(['email_status' => 'pending']);

        $contactForm->markEmailSent();

        $this->assertEquals('sent', $contactForm->fresh()->email_status);
        $this->assertNotNull($contactForm->fresh()->email_sent_at);
    }

    public function test_contact_form_mark_email_failed(): void
    {
        $contactForm = ContactForm::factory()->create(['email_status' => 'pending']);

        $contactForm->markEmailFailed('SMTP Error');

        $this->assertEquals('failed', $contactForm->fresh()->email_status);
        $this->assertEquals('SMTP Error', $contactForm->fresh()->email_last_error);
    }

    public function test_contact_form_mark_email_retrying(): void
    {
        $contactForm = ContactForm::factory()->create(['email_status' => 'pending']);

        $contactForm->markEmailRetrying();

        $this->assertEquals('retrying', $contactForm->fresh()->email_status);
    }

    public function test_contact_form_increment_attempts(): void
    {
        $contactForm = ContactForm::factory()->create(['email_attempts' => 0]);

        $contactForm->incrementAttempts();

        $this->assertEquals(1, $contactForm->fresh()->email_attempts);
    }

    public function test_contact_form_reset_email_status(): void
    {
        $contactForm = ContactForm::factory()->failed()->create([
            'email_attempts' => 3,
        ]);

        $contactForm->resetEmailStatus();

        $fresh = $contactForm->fresh();
        $this->assertEquals('pending', $fresh->email_status);
        $this->assertEquals(0, $fresh->email_attempts);
        $this->assertNull($fresh->email_last_error);
    }

    public function test_contact_form_factory_creates_pending(): void
    {
        $contactForm = ContactForm::factory()->pending()->create();

        $this->assertEquals('pending', $contactForm->email_status);
    }

    public function test_contact_form_factory_creates_sent(): void
    {
        $contactForm = ContactForm::factory()->sent()->create();

        $this->assertEquals('sent', $contactForm->email_status);
    }

    public function test_contact_form_factory_creates_failed(): void
    {
        $contactForm = ContactForm::factory()->failed()->create();

        $this->assertEquals('failed', $contactForm->email_status);
        $this->assertNotNull($contactForm->email_last_error);
    }

    public function test_contact_form_casts_email_sent_at_as_datetime(): void
    {
        $contactForm = ContactForm::factory()->create([
            'email_sent_at' => now(),
        ]);

        $this->assertInstanceOf(\Carbon\Carbon::class, $contactForm->email_sent_at);
    }
}
