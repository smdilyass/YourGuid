<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryItem;
use App\Http\Requests\StoreCategoryItemRequest;
use App\Http\Requests\UpdateCategoryItemRequest;

class CategoryItemController extends Controller
{
    // GET /admin/categories/{category}/items
    public function index(Category $category)
    {
        // eager-load items and paginate if you like
        $items = $category->items()->paginate(15);

        return view('admin.category-items.index', compact('category', 'items'));
    }

    // GET /admin/categories/{category}/items/create
    public function create(Category $category)
    {
        return view('admin.category-items.create', compact('category'));
    }

    // POST /admin/categories/{category}/items
    public function store(StoreCategoryItemRequest $request, Category $category)
    {
        $data = $request->validated();
        $data['category_id'] = $category->id;
        CategoryItem::create($data);

        return redirect()
            ->route('admin.categories.items.index', $category)
            ->with('success', 'Élément ajouté avec succès.');
    }

    // GET /admin/items/{item}
    public function show(CategoryItem $item)
    {
        return view('admin.category-items.show', compact('item'));
    }

    // GET /admin/items/{item}/edit
    public function edit(CategoryItem $item)
    {
        // for the breadcrumbs/menu you may still want its parent:
        $category = $item->category;
        return view('admin.category-items.edit', compact('category', 'item'));
    }

    // PUT/PATCH /admin/items/{item}
    public function update(UpdateCategoryItemRequest $request, CategoryItem $item)
    {
        $item->update($request->validated());

        return redirect()
            ->route('admin.categories.items.index', $item->category)
            ->with('success', 'Élément mis à jour avec succès.');
    }

    // DELETE /admin/items/{item}
    public function destroy(CategoryItem $item)
    {
        $category = $item->category;
        $item->delete();

        return redirect()
            ->route('admin.categories.items.index', $category)
            ->with('success', 'Élément supprimé avec succès.');
    }
}
