<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('career_jobs')) {
            Schema::create('career_jobs', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug')->unique();
                $table->string('department');
                $table->string('location');
                $table->enum('job_type', ['full-time', 'part-time', 'internship', 'contract'])->default('full-time');
                $table->string('experience')->nullable();
                $table->string('salary_range')->nullable();
                $table->longText('description')->nullable();
                $table->longText('responsibilities')->nullable();
                $table->longText('requirements')->nullable();
                $table->enum('status', ['active', 'inactive', 'closed'])->default('active');
                $table->date('last_date')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('career_jobs');
    }
};
