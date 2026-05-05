<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('email_logs', function (Blueprint $table) {
            $table->id();
            $table->string('lead_type')->nullable();
            $table->unsignedBigInteger('lead_id')->nullable();
            $table->string('to_email');
            $table->string('subject');
            $table->string('template');
            $table->enum('status', ['pending', 'sent', 'failed', 'retrying'])->default('pending');
            $table->tinyInteger('attempt')->default(1);
            $table->text('error_message')->nullable();
            $table->timestamp('sent_at')->nullable();
            $table->timestamps();

            $table->index(['lead_type', 'lead_id']);
            $table->index(['status', 'created_at']);
            $table->index('to_email');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('email_logs');
    }
};
