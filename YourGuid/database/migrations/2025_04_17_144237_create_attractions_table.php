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
        Schema::create('attractions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('city');
            $table->text('description');
            $table->text('short_description')->nullable();
            $table->string('main_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->string('category'); // natural_wonder, cultural_gem, historic_site, urban_oasis, architectural_wonder
            $table->json('location')->nullable(); // For storing lat/long
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->json('opening_hours')->nullable();
            $table->string('entrance_fee')->nullable();
            $table->json('nearby_stadiums')->nullable(); // For storing nearby stadiums
            $table->json('nearby_hotels')->nullable(); // For storing nearby hotels
            $table->json('transportation_options')->nullable(); // For storing transportation options
            $table->boolean('featured')->default(false);
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attractions');
    }
};
