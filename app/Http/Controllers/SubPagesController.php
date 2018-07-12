<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubPagesController extends Controller
{
    public function azores()
    {
        return view('pages.subpages.azores');
    }

    public function berlin()
    {
        return view('pages.subpages.berlin');
    }
    public function cinque()
    {
        return view('pages.subpages.cinque');
    }
    public function istanbul()
    {
        return view('pages.subpages.istanbul');
    }
    public function prague()
    {
        return view('pages.subpages.prague');
    }
    public function vienna()
    {
        return view('pages.subpages.vienna');
    }
}

