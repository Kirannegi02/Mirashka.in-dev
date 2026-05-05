<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('webinars', function (Blueprint $table) {
            $table->index(['status', 'start_date'], 'webinars_status_start_date_idx');
        });

        Schema::table('case_studies', function (Blueprint $table) {
            $table->index(['status', 'industry'], 'case_studies_status_industry_idx');
            $table->index('created_at', 'case_studies_created_at_idx');
        });

        Schema::table('banners', function (Blueprint $table) {
            $table->index(['status', 'created_at'], 'banners_status_created_at_idx');
        });

        Schema::table('contact_forms', function (Blueprint $table) {
            $table->index('created_at', 'contact_forms_created_at_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('webinars', function (Blueprint $table) {
            $table->dropIndex('webinars_status_start_date_idx');
        });

        Schema::table('case_studies', function (Blueprint $table) {
            $table->dropIndex('case_studies_status_industry_idx');
            $table->dropIndex('case_studies_created_at_idx');
        });

        Schema::table('banners', function (Blueprint $table) {
            $table->dropIndex('banners_status_created_at_idx');
        });

        Schema::table('contact_forms', function (Blueprint $table) {
            $table->dropIndex('contact_forms_created_at_idx');
        });
    }
};
