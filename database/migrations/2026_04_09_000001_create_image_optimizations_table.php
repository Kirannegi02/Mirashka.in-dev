<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('image_optimizations', function (Blueprint $table) {
            $table->id();
            $table->string('original_path')->comment('Original image path relative to storage');
            $table->string('optimized_path')->nullable()->comment('Optimized WebP path');
            $table->string('thumbnail_300')->nullable()->comment('300px thumbnail path');
            $table->string('thumbnail_600')->nullable()->comment('600px thumbnail path');
            $table->string('thumbnail_1200')->nullable()->comment('1200px thumbnail path');
            $table->unsignedBigInteger('original_size')->nullable()->comment('Original file size in bytes');
            $table->unsignedBigInteger('optimized_size')->nullable()->comment('Optimized file size in bytes');
            $table->string('mime_type')->nullable();
            $table->unsignedInteger('width')->nullable();
            $table->unsignedInteger('height')->nullable();
            $table->enum('status', ['pending', 'processing', 'completed', 'failed'])->default('pending');
            $table->text('error_message')->nullable();
            $table->string('optimizable_type')->nullable()->comment('Model type that owns the image');
            $table->unsignedBigInteger('optimizable_id')->nullable()->comment('Model ID that owns the image');
            $table->timestamps();

            $table->unique(['original_path']);
            $table->index(['status']);
            $table->index(['created_at']);
            $table->index(['optimizable_type', 'optimizable_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('image_optimizations');
    }
};
