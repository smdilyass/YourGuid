<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function show()
{
    $dishes = Dish::all(); // Or any other query to get your dishes
    return view('culture', compact('dishes'));
}
}
