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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();

            $table->string('client_name')->nullable();
            $table->string('industry')->nullable();

            $table->text('short_description')->nullable();

            $table->longText('challenge')->nullable();
            $table->longText('solution')->nullable();
            $table->longText('strategy')->nullable();

            $table->longText('results')->nullable();
            $table->longText('impact_highlights')->nullable();

            $table->string('featured_image')->nullable();

            $table->longText('media_coverage')->nullable();
            $table->string('reach')->nullable();

            $table->boolean('status')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
