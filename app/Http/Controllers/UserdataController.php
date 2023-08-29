<?php

namespace App\Http\Controllers;

use App\Models\Userdata;
use App\Http\Requests\UserDataRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserdataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Userdata::all();
      return view('Admin.data',compact('data'));
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
    public function store(UserDataRequest $request)
    {
       // return $request ;
       Userdata::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone_number'=>$request->phone_number,
        'unit_code'=>$request->unit_code,
        'description'=>$request->description,

       ]);
       return redirect()->back()->with('message','Data Sent successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Userdata $userdata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Userdata $userdata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Userdata $userdata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Userdata $userdata)
    {
        //
    }
}
