<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gender;
class GenderSeeder extends Seeder
{
    public function run ():void
    {
        gender::create([
            Gender::Create([
            ['name' => 'Male', 'created_at' => now(), 'updated_at' => now()],
        ]);
        Gender::Create([
            ['name' => 'Female', 'created_at' => now(), 'updated_at' => now()],
        ]);
        Gender::Create([
            ['name' => 'Other', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
