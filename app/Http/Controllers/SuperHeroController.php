<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use App\Models\Gender;
use App\Models\Universe;

class SuperHeroController extends Controller
{
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $genders = Gender::select('id', 'name') ->get();
       return view ('superheroes.create', compact('genders'));
    }
    
    public function store(Request $request)
    {
    
        Superhero::create([

        'gender_id' => $request ->gender_id,
        'real_name' => $request -> real_name,
        'universe_id' => 1,
        'name' => 'spiderman',
        'picture' => '',
        'create at' => Carbon::now(),
        'create at' => Carbon::now(),

        ]);

        return to_route('superheroes.index');
    }

    public function show(string $id)
    {
        $superhero = SuperHero::find(100);
        return view ('superheroes.show', compact ('superhero'));
    }

}
