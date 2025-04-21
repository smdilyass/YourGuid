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
        Schema::create('transport_options', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('type'); // train, bus, taxi, car_rental, metro, shuttle
            $table->text('description');
            $table->text('short_description')->nullable();
            $table->string('main_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->json('routes')->nullable(); // For storing route information
            $table->json('schedule')->nullable(); // For storing schedule information
            $table->json('pricing')->nullable(); // For storing pricing information
            $table->json('cities_served')->nullable(); // For storing cities served
            $table->json('stadiums_served')->nullable(); // For storing stadiums served
            $table->string('website')->nullable();
            $table->string('booking_url')->nullable();
            $table->json('tips')->nullable(); // For storing travel tips
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
        Schema::dropIfExists('transport_options');
    }
};
