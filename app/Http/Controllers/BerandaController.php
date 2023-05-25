<?php

namespace App\Http\Controllers;

use App\Models\BerandaModels;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('beranda');
    }

    /**
     * Display the specified resource.
     */
    public function show(BerandaModels $berandaModels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BerandaModels $berandaModels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BerandaModels $berandaModels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BerandaModels $berandaModels)
    {
        //
    }
}
