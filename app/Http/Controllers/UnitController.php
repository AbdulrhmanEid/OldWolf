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
        $units = Unit::all();
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
        $path2 =$request->photo->store('public/units');
        $path3 =$request->photo2->store('public/units');
        $path4 =$request->photo3->store('public/units');
        $path5 =$request->photo4->store('public/units');
        $path6 =$request->photo5->store('public/units');
        $path7 =$request->photo6->store('public/units');
        //  return $request->all();
        //  var_dump($request->photo);
         Unit::create([
             'type'=>$request->type,
             'status'=>$request->status,
             'number_badrooms'=>$request->number_badrooms,
             'number_bathrooms'=>$request->number_bathrooms,
             'area'=>$request->area,
             'unit_code'=>$request->unit_code,
            'location'=>$request->location,
             'kitchen'=>$request->kitchen,
             'balcony'=>$request->balcony,
             'description'=>$request->description,
             'image'=> $path,
             'photo'=> $path2,
             'photo2'=> $path3,
             'photo3'=> $path4,
             'photo4'=> $path5,
             'photo5'=> $path6,
             'photo6'=> $path7,
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
        //  return $request->all();
    //   if not choose new image
         if($request->has('image')){
             $path =$request->image->store('public/units');
         }
         else{
            $path = $unit->image ;
         } // image
         if($request->has('photo')){
             $path2 =$request->photo->store('public/units');
         }
         else{
            $path2 = $unit->photo ;
         } //photo
         if($request->has('photo2')){
            $path3 =$request->photo2->store('public/units');
         }
         else{
            $path3 = $unit->photo2 ;
         } //photo 2
         if($request->has('photo3')){
            $path4 =$request->photo3->store('public/units');}
         else{
            $path4 = $unit->photo3 ;
         } //photo 3


          $unit->type = $request->type;
          $unit->status = $request->status;
          $unit->number_badrooms = $request->number_badrooms;
          $unit->number_bathrooms = $request->number_bathrooms;
          $unit->area = $request->area;
          $unit->unit_code = $request->unit_code;
          $unit->location = $request->location;
          $unit->kitchen = $request->kitchen;
          $unit->balcony = $request->balcony;
          $unit->description = $request->description;
          $unit->image = $path ;
          $unit->photo = $path2 ;
          $unit->photo2 = $path3 ;
          $unit->photo3 = $path4 ;
          $unit->save();

         return redirect()->route('admin.addunit')->with('message','Updated Suessfully');

    }





    public function destroy($id)
    {
        // Unit::find($id)->delete();
        // //dd($id);
        // return redirect()->route('admin.addunit')->with('message','Deleted Suessfully');

        $Unit = Unit::findOrFail($id);

        $Unit->delete();

        return redirect()->route('admin.addunit')->with('message', 'Deleted Suessfully');
    }
}
