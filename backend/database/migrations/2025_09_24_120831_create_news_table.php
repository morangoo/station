<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('game_id');
            $table->foreignId('platform_id')->constrained('platforms')->onDelete('cascade');
            $table->string('title');
            $table->string('source_url');
            $table->json('content');
            $table->timestamp('published_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
