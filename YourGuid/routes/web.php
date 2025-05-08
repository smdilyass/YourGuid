<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\UserController;
// use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CategoryItemController;

use App\Http\Controllers\AuthController as ControllersAuthController;

use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\HomeController;
use App\Models\CategoryItem;

// Main Pages
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Authentication
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/logout', function () {
    return view('auth.logout');
})->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Categories
Route::get('/transport', [CategoriesController::class, 'transport'])->name('transport');

Route::get('/stadiums', function () {
    return view('categories.stadiums');
})->name('stadiums');

Route::get('/hotels', function () {
    return view('categories.hotels');
})->name('hotels');

Route::get('/culture', function () {
    return view('categories.culture');
})->name('culture');

use App\Http\Controllers\CategoriesController;

Route::get('/attractions', [CategoriesController::class, 'attractions'])->name('attractions');
Route::get('/hotels', [CategoriesController::class, 'hotels'])->name('hotels');


Route::get('/show',function(){
    return view('categories.show');
})->name('show');

Route::get('/categories/{id}', [CategoriesController::class, 'show'])->name('categories.show');


// // Stadium Details
// Route::get('/stadiums/casablanca', function () {
//     return view('stadiums.casablanca');
// })->name('stadiums.casablanca');

// Route::get('/stadiums/casablanca/map', function () {
//     return view('stadiums.casablanca-map');
// })->name('stadiums.casablanca.map');

// Route::get('/stadiums/rabat', function () {
//     return view('stadiums.rabat');
// })->name('stadiums.rabat');

// Route::get('/stadiums/marrakech', function () {
//     return view('stadiums.marrakech');
// })->name('stadiums.marrakech');

// Route::get('/stadiums/tangier', function () {
//     return view('stadiums.tangier');
// })->name('stadiums.tangier');

// // News Detail
// Route::get('/news/casablanca-stadium-design', function () {
//     return view('news-detail');
// })->name('news.casablanca-stadium-design');


// // API Endpoints
// Route::get('/api/stadiums', function () {
//     // Return stadium data
//     return response()->json([
//         'stadiums' => [
//             // Stadium data would go here
//         ]
//     ]);
// });

// Route::get('/api/matches', function () {
//     // Return match data
//     return response()->json([
//         'matches' => [
//             // Match data would go here
//         ]
//     ]);
// });
Route::get('/categories/{slug}', [CategoriesController::class, 'showCategoryWithItems']);


// Routes Admin
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Gestion des utilisateurs
    Route::resource('users', UserController::class);

    // Gestion des catégories
    Route::resource('categories', CategoryController::class);
    Route::post('categories/create', [CategoryController::class, 'create'])->name('categories.create');
    

    // Gestion des éléments de catégorie
    Route::resource('categories.items', CategoryItemController::class)
    ->shallow()
    ->names([
        'index'   => 'categories.items.index',
        'create'  => 'categories.items.create',
        'store'   => 'categories.items.store',
        'edit'    => 'categories.items.edit',
        'update'  => 'categories.items.update',
        'destroy' => 'categories.items.destroy',
    ]);
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
