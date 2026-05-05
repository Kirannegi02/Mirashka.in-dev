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
        Schema::create('webinars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->json('why_attend')->nullable();
            $table->json('features')->nullable();
            $table->json('what_you_get')->nullable();
            $table->date('start_date');
            $table->time('start_time');
            $table->string('timezone');
            $table->string('duration');
            $table->string('meeting_link')->nullable();
            $table->string('speaker_name');
            $table->string('speaker_designation')->nullable();
            $table->string('host_name')->nullable();
            $table->string('image')->nullable();
            $table->string('resources')->nullable();
            $table->string('status', 20)->default('upcoming');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index(['status', 'start_date'], 'webinars_status_start_date_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webinars');
    }
};
