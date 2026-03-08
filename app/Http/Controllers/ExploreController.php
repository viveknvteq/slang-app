<?php

namespace App\Http\Controllers;

use App\Models\Slang;

class ExploreController extends Controller
{

    public function index()
    {
        $slangs = Slang::latest()->get();

        return view('explore',compact('slangs'));
    }

}
