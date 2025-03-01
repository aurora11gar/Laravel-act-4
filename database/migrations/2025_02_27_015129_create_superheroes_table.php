<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('real_name', 40);
            $table->foreignId('universe_id')->constrained('universes'); 
            $table->foreignId('gender_id')->constrained('genders');  
            $table->string('gender', 10);
            $table->string('picture');
            $table->timestamps();
        });        
    }

    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};
