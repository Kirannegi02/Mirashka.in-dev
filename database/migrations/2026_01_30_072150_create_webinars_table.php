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
        Schema::create('webinars', function (Blueprint $table) {
           $table->id();                      
        $table->string('title');               
        $table->text('description');          
        $table->date('start_date');            
        $table->time('start_time');            
        $table->string('timezone');            
        $table->string('duration');             
        $table->string('speaker_name');       
        $table->string('host_name')->nullable();
        $table->string('image')->nullable();  
        $table->string('resources')->nullable();
        $table->enum('status', ['upcoming', 'completed', 'cancelled'])->default('upcoming'); 
        $table->timestamps();                 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webinars');
    }
};
