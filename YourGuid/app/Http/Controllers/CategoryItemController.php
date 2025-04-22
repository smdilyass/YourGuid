<?php

namespace App\Http\Controllers;

use App\Models\CategoryItem;
use App\Http\Requests\StoreCategoryItemRequest;
use App\Http\Requests\UpdateCategoryItemRequest;

use App\Models\CategoryItem;

class CategoryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     * Show all category items.
     */
    public function index()
    {
        // Get all category items from the database
        $categoryItems = CategoryItem::all();

        // Return the category items view with the data
        return view('category_items.index', compact('categoryItems'));
    }

    /**
     * Display the specified resource.
     * Show a single category item by id.
     */
    public function show($id)
    {
        // Find the category item by id or fail with 404
        $categoryItem = CategoryItem::findOrFail($id);

        // Return the category item view with the data
        return view('category_items.show', compact('categoryItem'));
    }
}
