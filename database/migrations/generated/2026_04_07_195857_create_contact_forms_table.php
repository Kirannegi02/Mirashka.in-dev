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
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone', 13);
            $table->string('email');
            $table->string('company_name')->nullable();
            $table->text('message');
            $table->enum('email_status', ['pending', 'sent', 'failed', 'retrying'])->default('pending');
            $table->tinyInteger('email_attempts')->default(0);
            $table->text('email_last_error')->nullable();
            $table->timestamp('email_sent_at')->nullable();
            $table->timestamp('created_at')->nullable()->index('contact_forms_created_at_idx');
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_forms');
    }
};
