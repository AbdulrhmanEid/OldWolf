<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitStoreRequest;
use App\Http\Requests\UnitUpdateRequest;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{

    public function index()
    {
        $units = Unit::paginate(5);
        return view('Admin.Add _Unit',compact('units'));
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
    public function store(UnitStoreRequest $request)
    {
        // return $request ; // testing

        $path =$request->image->store('public/units');
        Unit::create([
            'type'=>$request->type,
            'status'=>$request->status,
            'number_badrooms'=>$request->number_badrooms,
            'number_bathrooms'=>$request->number_bathrooms,
            'area'=>$request->area,
            'image'=> $path,


        ]);
        return redirect()->route('admin.addunit')->with('message','Inserted Suessfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $unit = Unit::find($id);
        return view('Admin.editunit',compact('unit'));
    }

     public function update(UnitUpdateRequest $request, $id)
    {
        $unit = Unit::find($id);
        // if not choose new image
        if($request->has('image')){
            $path =$request->image->store('public/units');
        }
        else{
            $path = $unit->image ;
        }

        $unit->type = $request->type;
        $unit->status = $request->status;
        $unit->number_badrooms = $request->number_badrooms;
        $unit->number_bathrooms = $request->number_bathrooms;
        $unit->area = $request->area;
        $unit->image =$path ;
        $unit->save();
       return redirect()->route('admin.addunit')->with('message','Updated Suessfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Unit::find($id)->delete();
        return redirect()->route('admin.addunit')->with('message','Deleted Suessfully');
    }
}
