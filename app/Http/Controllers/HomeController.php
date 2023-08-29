<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Propertystatus;
use App\Models\PropertyType;
use App\Models\Region;
use App\Models\Unit;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        //  return $types ;
        return view('fronted.index',compact('counteries','regions','types','statuses'));


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
    public function search(Request $request){
        $counteries = Country::get(['name','id']);
        $regions = Region::get(['name','id']);
        $types = PropertyType::get(['name','id']);
        $statuses = Propertystatus::get(['name','id']);
        $units = Unit::get();
        // return $request->pro_name;
        //  return dd($request->all()) ;
         $results = Unit :: where('location','LIKE','%'.$request->country_name.'%')->get();
        //  $results2 = Unit :: where('type','LIKE','%'.$request->pro_name.'%')->get();
        $res1 = Unit :: where('location','LIKE','%'.$request->region_name.'%')->get();
        $res2 = Unit :: where('type','LIKE','%'.$request->pro_name.'%')->get();
        $res3 = Unit :: where('status','LIKE','%'.$request->status_name.'%')->get();
        //  return $request->all();
        //  return $res1 ;
        // return $results;
        // return $res1;
        // return $results2;
          // return $res3;
           return view('fronted.random-search',compact('counteries','units','results','regions','types','statuses','res1','res2','res3')) ;


    }

}

