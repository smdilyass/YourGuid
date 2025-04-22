<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\CategoryItem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Affiche le tableau de bord administrateur.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $stats = [
            'users' => User::count(),
            'categories' => Category::count(),
            'items' => CategoryItem::count(),
        ];

        $latestUsers = User::latest()->take(5)->get();
        $latestCategories = Category::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'latestUsers', 'latestCategories'));
    }
}
