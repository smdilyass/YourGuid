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
    public function showCategory($slug)
    {
        // Find the category by slug or fail with 404, eager load category items
        $category = category::with('items')->where('slug', $slug)->firstOrFail();

        // Return the category view with the category data and related items
        return view('categories.show', compact('category'));
    }

    /**
     * Display the culture category with its items.
     */
    public function culture()
    {
        // Find the culture category by slug with its items
        $category = category::with('items')->where('slug', 'culture')->firstOrFail();

        // Get the items related to the culture category
        $items = $category->items()->orderBy('display_order')->get();

        // Return the culture view with the items data
        return view('categories.culture', compact('items'));
    }
}
