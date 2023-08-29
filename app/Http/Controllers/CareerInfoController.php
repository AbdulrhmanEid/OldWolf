<?php

namespace App\Http\Controllers;

use App\Models\AddCareer;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class CareerInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function show($id)
    {
        $career = AddCareer::findOrFail($id);
        return view('fronted.careers-2',compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {


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
