<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Propertystatus;
use App\Models\PropertyType;
use App\Models\Region;
use App\Models\Unit;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counteries = Country::get(['name','id']);
        $regions = Region::get(['name','id']);
        $types = PropertyType::get(['name','id']);
        $statuses = Propertystatus::get(['name','id']);
        $results = Unit :: paginate(6);
        return view('fronted.random-search',compact('counteries','regions','types','statuses','results'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
