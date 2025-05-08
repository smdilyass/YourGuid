<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StadiumsController extends Controller
{
    /**
     * Display a listing of the stadiums.
     */
    public function index()
    {
        // Example stadiums locations data
        $stadiums = [
            ['name' => 'Stade Mohammed V', 'city' => 'Casablanca', 'lat' => 33.573, 'lng' => -7.589],
            ['name' => 'Stade Moulay Abdellah', 'city' => 'Rabat', 'lat' => 34.020, 'lng' => -6.841],
            ['name' => 'Stade de Marrakech', 'city' => 'Marrakech', 'lat' => 31.629, 'lng' => -8.008],
            ['name' => 'Stade Ibn Batouta', 'city' => 'Tangier', 'lat' => 35.759, 'lng' => -5.834],
        ];

        return view('categories.stadiums', ['stadiums' => $stadiums]);
    }
}
