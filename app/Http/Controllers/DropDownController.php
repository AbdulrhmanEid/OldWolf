<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Country,City,State};

class DropDownController extends Controller
{
    public function index(){
        $counteries = Country::get(['name','id']);

        return view('fronted.index',compact('counteries'));
    }
}
