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
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('sub_heading')->nullable();
            $table->text('description');
            $table->string('image');
            $table->string('button_link')->nullable();
            $table->enum('status', ['active', 'disabled'])->default('active');
            $table->string('button_text')->nullable();
            $table->timestamps();

            $table->index(['status', 'created_at'], 'banners_status_created_at_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
