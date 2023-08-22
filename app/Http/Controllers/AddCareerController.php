<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCareerRequest;
use App\Models\AddCareer;
use Illuminate\Http\Request;

class AddCareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = AddCareer::all();
        return view('Admin.Add _Career',compact('careers'));
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
       // return $request ;
       AddCareer::create([
        'name'=> $request->name ,
        'location'=>$request->location
       ]);
       return redirect()->back()->with('message','Insert Suessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(AddCareer $addCareer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $career = AddCareer::find($id);
        return view('Admin.editcareer',compact('career'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCareerRequest $request, AddCareer $addCareer , $id)

    {
        $career = AddCareer::find($id);
        $career->name= $request->name ;
        $career->location= $request->location ;
        $career->save();
        return redirect()->route('admin.addcareer')->with('message','Updated Suessfully');





    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AddCareer $addCareer , $id)
    {
         AddCareer::find($id)->delete();
         return redirect()->route('admin.addcareer')->with('message','Deleted Suessfully');
    }
}
