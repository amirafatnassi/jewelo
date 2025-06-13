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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('content');
            $table->enum('category', [
                'Jewellery Trends',
                'Styling Tips',
                'Gifting Ideas',
                'Behind the Scenes',
                'Customer Stories',
                'Care & Maintenance',
                'Designer Spotlight',
            ]);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('image')->nullable(); // Path to stored image
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
