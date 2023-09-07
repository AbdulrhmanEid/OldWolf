<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Propertystatus;
use App\Models\PropertyType;
use App\Models\Region;
use App\Models\Unit;
use Illuminate\Http\Request;

class UaeController extends Controller
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
        $results = Unit ::where('location','LIKE','%'.'UAE'.'%')->get();
        return view('fronted.uae-search',compact('counteries','regions','types','statuses','results'));
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
        // code
       $results = Unit:: query()
       ->when(request()->has('country_name'),function($q){
           return $q->where('location','LIKE','%'.request('country_name').'%');
       })
       ->when(request()->has('region_name'),function($q){
           return $q->where('location','LIKE','%'.request('region_name').'%');
       })
       ->when(request()->has('pro_name'),function($q){
           return $q->where('type','LIKE','%'.request('pro_name').'%');
       })
       ->when(request()->has('status_name'),function($q){
           return $q->where('status','LIKE','%'.request('status_name').'%');
       })
       ->when(request()->has('city_name'),function($q){
           return $q->where('location','LIKE','%'.request('city_name').'%');
       })
       ->get();
        //   return $results ;
          return view('fronted.random-search',compact('counteries','units','results','regions','types','statuses')) ;
        }


    public function small_search(Request $request){
           // return $request->all();
           $counteries = Country::get(['name','id']);
           $regions = Region::get(['name','id']);
           $types = PropertyType::get(['name','id']);
           $statuses = Propertystatus::get(['name','id']);
           $units = Unit::get();

           $results = Unit:: query()
           ->when(request()->has('lname'),function($q){
               return $q->where('location','LIKE','%'.request('lname').'%');
           })
           ->when(request()->has('rname'),function($q){
               return $q->where('location','LIKE','%'.request('rname').'%');
           })
           ->when(request()->has('cname'),function($q){
               return $q->where('location','LIKE','%'.request('cname').'%');
           })
           ->when(request()->has('ptype'),function($q){
               return $q->where('type','LIKE','%'.request('ptype').'%');
           })
           ->get();
           // return $results ;
           return view('fronted.random-search',compact('counteries','units','results','regions','types','statuses')) ;
        }

}
