<?php

namespace App\Http\Controllers;

use App\Models\CategoryItem;

abstract class Controller
{
    public function show()
{
    $dishes = CategoryItem::all(); // Or any other query to get your dishes
    return view('categories.culture', compact('dishes'));
}
}
