<?php

namespace App\Http\Controllers;

use App\Models\attractions;
use App\Http\Requests\StoreattractionsRequest;
use App\Http\Requests\UpdateattractionsRequest;

class AttractionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Example attractions locations data
        $attractions = [
            ['name' => 'Sahara Desert', 'city' => 'Erg Chebbi', 'lat' => 31.143, 'lng' => -4.012],
            ['name' => 'Atlas Mountains', 'city' => 'High Atlas', 'lat' => 31.045, 'lng' => -7.863],
            ['name' => 'Jemaa el-Fnaa', 'city' => 'Marrakech', 'lat' => 31.625, 'lng' => -7.989],
            ['name' => 'Kasbah of the Udayas', 'city' => 'Rabat', 'lat' => 34.020, 'lng' => -6.841],
            ['name' => 'Chefchaouen', 'city' => 'Chefchaouen', 'lat' => 35.171, 'lng' => -5.269],
            ['name' => 'Essaouira', 'city' => 'Essaouira', 'lat' => 31.508, 'lng' => -9.759],
        ];

        return view('categories.attractions', ['attractions' => $attractions]);
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
    public function store(StoreattractionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(attractions $attractions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(attractions $attractions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateattractionsRequest $request, attractions $attractions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(attractions $attractions)
    {
        //
    }
}
