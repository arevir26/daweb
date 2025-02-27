<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherInfoType extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('otherinfo.index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OtherInfoType $otherInfoType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OtherInfoType $otherInfoType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OtherInfoType $otherInfoType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OtherInfoType $otherInfoType)
    {
        //
    }
}
