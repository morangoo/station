<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password_hash');
            $table->text('bio')->nullable();
            $table->string('avatar_url')->nullable();
            $table->string('banner_url')->nullable();
            $table->string('custom_url')->unique();
            $table->json('customization')->nullable();
            $table->integer('xp')->default(0);
            $table->foreignId('role_id')->default(0)->constrained('roles')->nullOnDelete();
            $table->boolean('is_prime')->default(false);
            $table->boolean('banned')->default(false);
            $table->boolean('email_verified')->default(false);
            $table->string('steam_id')->nullable();
            $table->string('steam_token')->nullable();
            $table->json('top5_games')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
