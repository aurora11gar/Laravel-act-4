<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;

Route::get('/', function () {
    echo 'hello guys this is my first project'
    echo '<pre>';
    print_r (Universe ::all());
    echo '<pre>';

    dump (Universe ::all());

    //return view('welcome');
});
