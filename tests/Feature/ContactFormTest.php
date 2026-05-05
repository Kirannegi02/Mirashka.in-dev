<?php

namespace Tests\Feature;

use App\Models\ContactForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_form_page_loads(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_contact_form_submission_with_valid_data(): void
    {
        $response = $this->post(route('contact.submit'), [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'company_name' => 'Test Company',
            'message' => 'Test message',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('contact_forms', [
            'email' => 'john@example.com',
            'name' => 'John Doe',
        ]);
    }

    public function test_contact_form_validates_required_fields(): void
    {
        $response = $this->post(route('contact.submit'), []);

        $response->assertSessionHasErrors(['name', 'email', 'phone', 'message']);
    }

    public function test_contact_form_validates_email_format(): void
    {
        $response = $this->post(route('contact.submit'), [
            'name' => 'John Doe',
            'email' => 'invalid-email',
            'phone' => '1234567890',
            'message' => 'Test message',
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_contact_form_creates_with_pending_status(): void
    {
        $this->post(route('contact.submit'), [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'message' => 'Test message',
        ]);

        $contact = ContactForm::where('email', 'john@example.com')->first();
        $this->assertEquals('pending', $contact->email_status);
    }

    public function test_admin_can_view_contact_forms(): void
    {
        $user = \App\Models\User::factory()->create();
        ContactForm::factory()->count(5)->create();

        $response = $this->actingAs($user)->get(route('admin.mainform.index'));

        $response->assertStatus(200);
    }

    public function test_contact_forms_list_is_paginated(): void
    {
        $user = \App\Models\User::factory()->create();
        ContactForm::factory()->count(20)->create();

        $response = $this->actingAs($user)->get(route('admin.mainform.index'));

        $response->assertStatus(200);
    }

    public function test_admin_can_retry_failed_email(): void
    {
        $user = \App\Models\User::factory()->create();
        $contact = ContactForm::factory()->failed()->create();

        $response = $this->actingAs($user)->post(
            route('admin.mainform.retry-email', $contact->id)
        );

        $response->assertRedirect();
    }
}
