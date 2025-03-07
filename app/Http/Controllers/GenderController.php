<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index(){

        $gender = Gender::all();
    
        return view('gender', compact('gender'));
    }
}
