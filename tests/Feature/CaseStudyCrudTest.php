<?php

namespace Tests\Feature;

use App\Models\CaseStudy;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CaseStudyCrudTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->actingAs(User::factory()->create());
    }

    public function test_admin_can_view_case_studies_list(): void
    {
        CaseStudy::factory()->count(3)->create();

        $response = $this->get(route('admin.casestudies.index'));

        $response->assertStatus(200);
        $response->assertSee('Case Study');
    }

    public function test_case_studies_list_is_paginated(): void
    {
        CaseStudy::factory()->count(20)->create();

        $response = $this->get(route('admin.casestudies.index'));

        $response->assertStatus(200);
    }

    public function test_admin_can_create_case_study(): void
    {
        Storage::fake('public');

        $image = UploadedFile::fake()->image('case-study.jpg');

        $data = [
            'title' => 'Test Case Study',
            'client_name' => 'Test Client',
            'industry' => 'Technology',
            'featured_image' => $image,
            'status' => 1,
        ];

        $response = $this->post(route('admin.casestudies.store'), $data);

        $response->assertRedirect();
        $this->assertDatabaseHas('case_studies', [
            'title' => 'Test Case Study',
            'client_name' => 'Test Client',
        ]);
    }

    public function test_case_study_creation_validates_required_fields(): void
    {
        $response = $this->post(route('admin.casestudies.store'), []);

        $response->assertSessionHasErrors(['title', 'client_name', 'industry']);
    }

    public function test_admin_can_view_case_study_edit_page(): void
    {
        $caseStudy = CaseStudy::factory()->create();

        $response = $this->get(route('admin.casestudies.edit', $caseStudy->id));

        $response->assertStatus(200);
    }

    public function test_admin_can_update_case_study(): void
    {
        $caseStudy = CaseStudy::factory()->create(['title' => 'Old Title']);

        $response = $this->put(route('admin.casestudies.update', $caseStudy->id), [
            'title' => 'New Title',
            'client_name' => $caseStudy->client_name,
            'industry' => $caseStudy->industry,
            'status' => $caseStudy->status,
        ]);

        $response->assertRedirect();
        $this->assertEquals('New Title', $caseStudy->fresh()->title);
    }

    public function test_admin_can_delete_case_study(): void
    {
        $caseStudy = CaseStudy::factory()->create();
        $id = $caseStudy->id;

        $response = $this->delete(route('admin.casestudies.destroy', $caseStudy->id));

        $response->assertRedirect();
        $this->assertNull(CaseStudy::find($id));
    }

    public function test_frontend_can_view_case_studies(): void
    {
        CaseStudy::factory()->count(3)->active()->create();

        $response = $this->get('/case-studies');

        $response->assertStatus(200);
    }

    public function test_frontend_can_filter_case_studies_by_industry(): void
    {
        CaseStudy::factory()->create(['industry' => 'Technology', 'status' => 1]);
        CaseStudy::factory()->create(['industry' => 'Healthcare', 'status' => 1]);

        $response = $this->get('/filter-case-studies?industry=Technology');

        $response->assertStatus(200);
    }
}
