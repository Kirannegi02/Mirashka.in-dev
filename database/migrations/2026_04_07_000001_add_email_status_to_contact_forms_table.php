<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            $table->enum('email_status', ['pending', 'sent', 'failed', 'retrying'])
                ->default('pending')
                ->after('message');
            $table->tinyInteger('email_attempts')
                ->default(0)
                ->after('email_status');
            $table->text('email_last_error')
                ->nullable()
                ->after('email_attempts');
            $table->timestamp('email_sent_at')
                ->nullable()
                ->after('email_last_error');
        });
    }

    public function down(): void
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            $table->dropColumn(['email_status', 'email_attempts', 'email_last_error', 'email_sent_at']);
        });
    }
};
