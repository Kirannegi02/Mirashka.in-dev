<?php

namespace Tests\Unit\Models;

use App\Models\CaseStudy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CaseStudyTest extends TestCase
{
    use RefreshDatabase;

    public function test_case_study_can_be_created(): void
    {
        $caseStudy = CaseStudy::factory()->create();

        $this->assertDatabaseHas('case_studies', [
            'id' => $caseStudy->id,
            'title' => $caseStudy->title,
        ]);
    }

    public function test_case_study_has_correct_fillable_attributes(): void
    {
        $caseStudy = CaseStudy::factory()->create([
            'title' => 'Test Case',
            'client_name' => 'Test Client',
            'status' => 1,
        ]);

        $this->assertEquals('Test Case', $caseStudy->title);
        $this->assertEquals('Test Client', $caseStudy->client_name);
        $this->assertEquals(1, $caseStudy->status);
    }

    public function test_case_study_factory_creates_active_case_study(): void
    {
        $caseStudy = CaseStudy::factory()->active()->create();

        $this->assertEquals(1, $caseStudy->status);
    }

    public function test_case_study_factory_creates_inactive_case_study(): void
    {
        $caseStudy = CaseStudy::factory()->inactive()->create();

        $this->assertEquals(0, $caseStudy->status);
    }

    public function test_case_study_can_update(): void
    {
        $caseStudy = CaseStudy::factory()->create(['title' => 'Old Title']);

        $caseStudy->update(['title' => 'New Title']);

        $this->assertEquals('New Title', $caseStudy->fresh()->title);
    }

    public function test_case_study_can_delete(): void
    {
        $caseStudy = CaseStudy::factory()->create();
        $id = $caseStudy->id;

        $caseStudy->delete();

        $this->assertNull(CaseStudy::find($id));
    }
}
