<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('display_order')->get();
        return view('welcome', compact('categories'));
    }
}
