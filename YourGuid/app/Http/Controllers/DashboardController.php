<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use App\Models\CategoryItem;

class DashboardController extends Controller
{
    public function index()
    {
        $latestUsers = User::orderBy('created_at', 'desc')->limit(5)->get();
        $latestCategories = Category::orderBy('created_at', 'desc')->limit(5)->get();

        $stats = [
            'users' => User::count(),
            'categories' => Category::count(),
            'items' => CategoryItem::count(),
        ];

        return view('admin.dashboard', compact('latestUsers', 'latestCategories', 'stats'));
    }
}

