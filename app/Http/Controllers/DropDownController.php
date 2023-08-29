<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Country,City,State};
use App\Models\Propertystatus;
use App\Models\PropertyType;
use App\Models\Region;


class DropDownController extends Controller
{
    public function index(){
        $counteries = Country::get(['name','id']);
        $regions = Region::get(['name','id']);
        $types = PropertyType::get(['name','id']);
        $statuses = Propertystatus::get(['name','id']);
        //  return $types ;
        return view('fronted.index',compact('counteries','regions','types','statuses'));

    }
}
