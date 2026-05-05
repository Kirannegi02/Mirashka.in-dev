<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('webinar_registrations', function (Blueprint $table) {
            $table->enum('email_status', ['pending', 'sent', 'failed', 'retrying'])
                ->default('pending')
                ->after('reminder_sent_at');
            $table->tinyInteger('email_attempts')
                ->default(0)
                ->after('email_status');
            $table->text('email_last_error')
                ->nullable()
                ->after('email_attempts');
        });
    }

    public function down(): void
    {
        Schema::table('webinar_registrations', function (Blueprint $table) {
            $table->dropColumn(['email_status', 'email_attempts', 'email_last_error']);
        });
    }
};
