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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');   
            $table->string('image'); 
            $table->text('steps');
            $table->integer('cooking_time')->default(0);
    
            // Add the category_id column
            $table->unsignedBigInteger('category_id');
            
            // Define the foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories');
    
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
