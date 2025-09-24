<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('xp_min')->nullable();
            $table->integer('xp_max')->nullable();
            $table->string('badge')->nullable();
            $table->text('description')->nullable();
            $table->text('color')->nullable();
            $table->json('benefits')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
