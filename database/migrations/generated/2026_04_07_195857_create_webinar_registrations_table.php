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
        Schema::create('webinar_registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('webinar_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone', 20);
            $table->string('company')->nullable();
            $table->string('job_title')->nullable();
            $table->string('industry')->nullable();
            $table->string('country')->nullable();
            $table->enum('status', ['registered', 'attended', 'no_show'])->default('registered');
            $table->timestamp('email_sent_at')->nullable();
            $table->timestamp('reminder_sent_at')->nullable();
            $table->enum('email_status', ['pending', 'sent', 'failed', 'retrying'])->default('pending');
            $table->tinyInteger('email_attempts')->default(0);
            $table->text('email_last_error')->nullable();
            $table->timestamps();

            $table->index(['webinar_id', 'email']);
            $table->unique(['webinar_id', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webinar_registrations');
    }
};
