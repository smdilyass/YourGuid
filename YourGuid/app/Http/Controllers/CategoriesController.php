<?php

namespace App\Http\Controllers;

// Removed unnecessary use directive for categories
use App\Http\Requests\StorecategoriesRequest;
use App\Http\Requests\UpdatecategoriesRequest;

use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     * Show all categories.
     */
    public function index()
    {
        // Get all categories from the database
        $categories = Category::orderBy('display_order')->get();

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
        $category = Category::with('items')->where('slug', $slug)->firstOrFail();

        // Return the category view with the category data and related items
        return view('categories.show', compact('category'));
    }

 

    /**
     * Display the culture category with its items.
     */
    public function culture()
    {
        // Find the culture category by slug with its items
        $category = Category::with('items')->where('slug', 'culture')->firstOrFail();

        // Get the items related to the culture category
        $items = $category->items()->orderBy('display_order')->get();

        // Return the culture view with the items data
        return view('categories.culture', compact('items'));
    }

    /**
     * Display the attractions category with its items.
     */
    public function attractions()
    {
        // Find the attractions category by slug with its items
        $category = Category::with('items')->where('slug', 'attractions')->firstOrFail();

        // Get the items related to the attractions category
        $items = $category->items()->orderBy('display_order')->get();

        // Find the transport category by slug with its items
        $transportCategory = Category::with('items')->where('slug', 'transport')->firstOrFail();

        // Get the items related to the transport category
        $transportItems = $transportCategory->items()->orderBy('display_order')->get();

        // Return the attractions view with both attractions and transport items
        return view('categories.attractions', compact('items', 'transportItems'));
    }

    public function transport()
    {
        // Assuming you have a Category model, and items() relationship:
        $category = Category::where('slug','transport')->firstOrFail();
        $items    = $category->items; // Collection of CategoryItem

        return view('categories.transport', compact('category','items'));
    }

    /**
     * Display the hotels category with its items.
     */
    public function hotels()
    {
        // Find the hotels category by slug with its items
        $category = Category::with('items')->where('slug', 'hotels')->firstOrFail();

        // Get the items related to the hotels category
        $items = $category->items()->orderBy('display_order')->get();

        // Return the hotels view with the items data
        return view('categories.hotels', compact('items'));
    }


    /**
     * Display the stadiums category with its items.
     */
    public function stadiums()
    {
        // Find the stadiums category by slug with its items
        $category = Category::with('items')->where('slug', 'stadiums')->firstOrFail();

        // Get the items related to the stadiums category
        $items = $category->items()->orderBy('display_order')->get();

        // Return the stadiums view with the items data
        return view('categories.stadiums', compact('items'));
    }


}
