<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use App\Http\Requests\StorecontactsRequest;
use App\Http\Requests\UpdatecontactsRequest;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorecontactsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(contacts $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecontactsRequest $request, contacts $contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contacts $contacts)
    {
        //
    }
}
