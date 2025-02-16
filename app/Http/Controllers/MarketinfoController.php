<?php

namespace App\Http\Controllers;

use App\Models\Marketinfo;
use Illuminate\Http\Request;

class MarketinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['marketinfos'] = Marketinfo::all();
        $data['count'] = Marketinfo::all()->count();
        return view('market.list', $data);
    }

    private function getAddress(){
        return "This is my Address";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('market.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(['market_name' => 'required']);
        $market = new Marketinfo();
        $market->market_name = $validated['market_name'];
        $market->save();
        return redirect('/market');
    }

    /**
     * Display the specified resource.
     */
    public function show(Marketinfo $marketinfo)
    {
        echo '<pre>';
        print_r($marketinfo);
        echo '</pre>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marketinfo $marketinfo)
    {
        return view('market.update', ['market' => $marketinfo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marketinfo $marketinfo)
    {
        $validated = $request->validate(['market_name'=> 'required']);
        $marketinfo->market_name = $validated['market_name'];
        $marketinfo->province = $request->input('province');
        $marketinfo->municipality = $request->input('municipality');
        $marketinfo->barangay = $request->input('barangay');
        $marketinfo->other_address = $request->input('other_address');
        $marketinfo->gps_lat = $request->input('gps_lat');
        $marketinfo->gps_long = $request->input('gps_long');
        $marketinfo->market_admin = $request->input('market_admin');
        $marketinfo->contact = $request->input('contact');
        $marketinfo->market_type = $request->input('market_type');
        $marketinfo->management = $request->input('management');
        $marketinfo->vendor_demographics= $request->input('vendor_demographics');
        $marketinfo->save();
        return redirect()->route('market');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marketinfo $marketinfo)
    {
        $marketinfo->delete();
        return redirect()->route('market');
    }
}
