<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this -> call([
            GenderSeeder::class,
            GenderFactoryUniverse::class,
        ]);
        superheroes::factory(100)->create();
    }
}
