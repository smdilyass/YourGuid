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
        Schema::create('news_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->text('content');
            $table->string('featured_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->string('category'); 
            $table->foreignId('author_id')->nullable()->constrained('users')->nullOnDelete();
            $table->boolean('featured')->default(false);
            $table->boolean('published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->json('tags')->nullable();
            $table->json('related_articles')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_articles');
    }
};
