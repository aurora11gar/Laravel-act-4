<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
   use HasFactory;
   protected $table = "superheroes"; 
   
   protected $fillable=[
    'name',
    'real_name',
    'gender_id',
    'universe_id',
    'picture',
   ];
}
