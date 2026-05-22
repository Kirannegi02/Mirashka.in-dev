<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('banners', function (Blueprint $table) {
            if (Schema::hasColumn('banners', 'slug')) {
                $table->dropColumn('slug');
            }
            if (Schema::hasColumn('banners', 'nav_title')) {
                $table->dropColumn('nav_title');
            }
            if (Schema::hasColumn('banners', 'sort_order')) {
                $table->dropColumn('sort_order');
            }
        });
    }

    public function down(): void
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique()->after('id');
            $table->string('nav_title')->nullable()->after('title');
            $table->unsignedSmallInteger('sort_order')->default(0)->after('status');
        });
    }
};
