<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
{
    Schema::table('case_studies', function (Blueprint $table) {

        $table->string('image_one')->nullable();
        $table->string('image_two')->nullable();
        $table->string('image_three')->nullable();
        $table->string('image_four')->nullable();

    });
}

public function down(): void
{
    Schema::table('case_studies', function (Blueprint $table) {

        $table->dropColumn([
            'image_one',
            'image_two',
            'image_three',
            'image_four'
        ]);

    });
}
};
