<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table -> string('name', 100);
            $table -> string('real_name',40);
            $table -> foreignid('universe_id') -> constrained ('universes') -> onDelete('cascade');
            $table -> foreignid('gender_id') -> constrained ('genders') -> onDelete('cascade');
            $table -> string('picture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};
