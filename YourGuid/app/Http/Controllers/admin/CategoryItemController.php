<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryItemController extends Controller
{
    /**
     * Affiche la liste des éléments d'une catégorie.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\View\View
     */
    public function index(Category $category)
    {
        $items = $category->items()->latest()->paginate(10);
        return view('admin.category-items.index', compact('category', 'items'));
    }

    /**
     * Affiche le formulaire de création d'un élément.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\View\View
     */
    public function create(Category $category)
    {
        return view('admin.category-items.create', compact('category'));
    }

    /**
     * Enregistre un nouvel élément.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
            'details' => ['nullable', 'array'],
        ]);

        $item = new CategoryItem([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'details' => $request->details ?? [],
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('category-items', 'public');
            $item->image = $path;
        }

        $category->items()->save($item);

        return redirect()->route('admin.categories.items.index', $category)
            ->with('success', 'Élément créé avec succès.');
    }

    /**
     * Affiche le formulaire d'édition d'un élément.
     *
     * @param  \App\Models\Category  $category
     * @param  \App\Models\CategoryItem  $item
     * @return \Illuminate\View\View
     */
    public function edit(Category $category, CategoryItem $item)
    {
        return view('admin.category-items.edit', compact('category', 'item'));
    }

    /**
     * Met à jour un élément.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @param  \App\Models\CategoryItem  $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Category $category, CategoryItem $item)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
            'details' => ['nullable', 'array'],
        ]);

        $item->name = $request->name;
        $item->slug = Str::slug($request->name);
        $item->description = $request->description;
        $item->details = $request->details ?? [];

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($item->image) {
                \Storage::disk('public')->delete($item->image);
            }
            
            $path = $request->file('image')->store('category-items', 'public');
            $item->image = $path;
        }

        $item->save();

        return redirect()->route('admin.categories.items.index', $category)
            ->with('success', 'Élément mis à jour avec succès.');
    }

    /**
     * Supprime un élément.
     *
     * @param  \App\Models\Category  $category
     * @param  \App\Models\CategoryItem  $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Category $category, CategoryItem $item)
    {
        // Supprimer l'image si elle existe
        if ($item->image) {
            \Storage::disk('public')->delete($item->image);
        }

        $item->delete();

        return redirect()->route('admin.categories.items.index', $category)
            ->with('success', 'Élément supprimé avec succès.');
    }
}
