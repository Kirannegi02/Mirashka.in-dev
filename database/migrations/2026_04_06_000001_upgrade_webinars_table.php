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
            $table->string('speaker_designation')->nullable()->after('speaker_name');
            $table->string('meeting_link')->nullable()->after('duration');
            $table->boolean('is_active')->default(true)->after('status');

            // Drop existing status and add as string
            $table->string('status', 20)->default('upcoming')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('webinars', function (Blueprint $table) {
            $table->dropColumn(['speaker_designation', 'meeting_link', 'is_active']);
        });
    }
};
