<?php

namespace App\Http\Controllers;

use App\Models\StallCategory;
use Illuminate\Http\Request;

class StallCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['stalls'] = StallCategory::all();
        $data['title'] = 'Market Stall Categories';
        return view('stallcategory.list', $data);
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
    public function show(StallCategory $stallCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StallCategory $stallCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StallCategory $stallCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StallCategory $stallCategory)
    {
        //
    }
}
