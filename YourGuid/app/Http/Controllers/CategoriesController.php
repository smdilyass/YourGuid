<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Http\Requests\StorecategoriesRequest;
use App\Http\Requests\UpdatecategoriesRequest;

use App\Models\category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     * Show all categories.
     */
    public function index()
    {
        // Get all categories from the database
        $categories = category::orderBy('display_order')->get();

        // Return the categories view with the categories data
        return view('categories.index', compact('categories'));
    }

    /**
     * Display the specified resource.
     * Show a single category by slug.
     */
    public function show($slug)
    {
        // Find the category by slug or fail with 404, eager load category items
        $category = category::with('items')->where('slug', $slug)->firstOrFail();

        // Return the category view with the category data and related items
        return view('categories.show', compact('category'));
    }
}
