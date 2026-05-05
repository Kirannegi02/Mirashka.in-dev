<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('podcast', function (Blueprint $table) {
            if (! Schema::hasColumn('podcast', 'status')) {
                $table->enum('status', ['active', 'disabled'])->default('disabled')->after('audio');
            }
        });
    }

    public function down(): void
    {
        Schema::table('podcast', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
