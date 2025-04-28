<?php

namespace App\Http\Controllers;

use App\Models\CategoryItem;
use App\Http\Requests\StoreCategoryItemRequest;
use App\Http\Requests\UpdateCategoryItemRequest;



class CategoryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     * Show all category items.
     */
    public function index($category)
    {
        // Get all category items for the given category from the database
        $categoryItems = CategoryItem::where('category_id', $category->id)->get();

        // Return the category items view with the data and category
        return view('admin.category-items.index', compact('categoryItems', 'category'));
    }

    public function create($category)
    {
        // Return the create category item view with the category
        return view('admin.category-items.create', compact('category'));
    }

    public function update($category, $id)
    {
        // Find the category item by id or fail with 404
        $categoryItem = CategoryItem::findOrFail($id);

        // Return the update category item view with the data and category
        return view('admin.category-items.update', compact('categoryItem', 'category'));
    }
    public function delete($id)
    {   
        // Find the category item by id or fail with 404
        $categoryItem = CategoryItem::findOrFail($id);

        // Delete the category item
        $categoryItem->delete();

        // Redirect to the category items index page
        return redirect()->route('category_items.index');
    }

    /**
     * Display the specified resource.
     * Show a single category item by id.
     */
    // public function show($id)
    // {
    //     // This method signature is updated to be compatible with base Controller class
    //     abort(404);
    //     return view('admin.category-items.show', compact('categoryItem'));
    // }
    
}
