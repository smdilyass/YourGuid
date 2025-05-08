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
        Schema::create('stadiums', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('city');
            $table->integer('capacity');
            $table->text('description');
            $table->text('short_description')->nullable();
            $table->string('main_image')->nullable();
            $table->string('panorama_image')->nullable();
            $table->string('map_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->json('features')->nullable();
            $table->json('location')->nullable(); 
            $table->string('status')->default('planned'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stadiums');
    }
};
