<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('image_optimizations', function (Blueprint $table) {
            if (! Schema::hasColumn('image_optimizations', 'optimizable_type')) {
                $table->string('optimizable_type')->nullable()->after('error_message');
            }
            if (! Schema::hasColumn('image_optimizations', 'optimizable_id')) {
                $table->unsignedBigInteger('optimizable_id')->nullable()->after('optimizable_type');
            }
        });
    }

    public function down(): void
    {
        Schema::table('image_optimizations', function (Blueprint $table) {
            if (Schema::hasColumn('image_optimizations', 'optimizable_type')) {
                $table->dropColumn('optimizable_type');
            }
            if (Schema::hasColumn('image_optimizations', 'optimizable_id')) {
                $table->dropColumn('optimizable_id');
            }
        });
    }
};
