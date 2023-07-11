<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function store(Request $request){

       /* Location::create([
            'latitude'=>$request->lat,
            'longitude'=>$request->lng
        ]);
        return redirect()->route('/') ->with([
            "succes"=>"location saved "
        ]);*/
    }
}