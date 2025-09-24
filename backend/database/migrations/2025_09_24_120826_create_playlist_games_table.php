<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('playlist_games', function (Blueprint $table) {
            $table->foreignId('playlist_id')->constrained('playlists')->onDelete('cascade');
            $table->string('game_id');
            $table->foreignId('platform_id')->constrained('platforms')->onDelete('cascade');
            $table->integer('order_index');
            $table->primary(['playlist_id', 'game_id', 'platform_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('playlist_games');
    }
};
