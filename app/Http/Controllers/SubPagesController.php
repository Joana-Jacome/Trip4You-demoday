<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class SubPagesController extends Controller
{
    public function show($id)
    {
        $location=Location::FindorFail($id);
        $tours = $location->tours;
        return view('pages.subpages.singleTrip', compact(['location','tours']));
    }

   
}

