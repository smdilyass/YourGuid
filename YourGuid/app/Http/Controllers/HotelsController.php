<?php

namespace App\Http\Controllers;

use App\Models\hotels;
use App\Http\Requests\StorehotelsRequest;
use App\Http\Requests\UpdatehotelsRequest;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Example hotel locations data
        $hotels = [
            ['name' => 'Hotel Casablanca', 'city' => 'Casablanca', 'lat' => 33.589, 'lng' => -7.611],
            ['name' => 'Hotel Marrakech', 'city' => 'Marrakech', 'lat' => 31.627, 'lng' => -8.034],
            ['name' => 'Hotel Rabat', 'city' => 'Rabat', 'lat' => 34.021, 'lng' => -6.842],
            ['name' => 'Hotel Tangier', 'city' => 'Tangier', 'lat' => 35.748, 'lng' => -5.834],
            ['name' => 'Hotel Agadir', 'city' => 'Agadir', 'lat' => 30.393, 'lng' => -9.548],
            ['name' => 'Hotel Fes', 'city' => 'Fes', 'lat' => 34.027, 'lng' => -5.008],
        ];

        return view('categories.hotels', ['hotels' => $hotels]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorehotelsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(hotels $hotels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hotels $hotels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatehotelsRequest $request, hotels $hotels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hotels $hotels)
    {
        //
    }
}
