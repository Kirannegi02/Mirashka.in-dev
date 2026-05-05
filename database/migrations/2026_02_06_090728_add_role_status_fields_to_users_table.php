<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // First ensure roles exist
        if (! Schema::hasTable('roles')) {
            Schema::create('roles', function (Blueprint $table) {
                $table->id();
                $table->string('name')->unique();
                $table->string('label')->nullable();
                $table->timestamps();
            });
        }

        Schema::table('users', function (Blueprint $table) {

            if (! Schema::hasColumn('users', 'role_id')) {
                $table->unsignedBigInteger('role_id')
                    ->default(2)
                    ->nullable()
                    ->after('id');

                // Add foreign key without cascade to avoid issues
                $table->foreign('role_id')
                    ->references('id')
                    ->on('roles')
                    ->onDelete('set null');
            }

            if (! Schema::hasColumn('users', 'status')) {
                $table->enum('status', ['pending', 'approved', 'suspended'])
                    ->default('pending')
                    ->after('password');
            }

            if (! Schema::hasColumn('users', 'industry')) {
                $table->string('industry')->nullable()->after('status');
            }

            if (! Schema::hasColumn('users', 'approved_at')) {
                $table->timestamp('approved_at')->nullable();
            }

            if (! Schema::hasColumn('users', 'last_login_at')) {
                $table->timestamp('last_login_at')->nullable();
            }

            if (! Schema::hasColumn('users', 'is_active')) {
                $table->boolean('is_active')->default(true);
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn([
                'role_id',
                'status',
                'industry',
                'approved_at',
                'last_login_at',
                'is_active',
            ]);
        });
    }
};
