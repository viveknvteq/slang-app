<?php

namespace App\Http\Controllers;

use App\Models\Slang;

class ExploreController extends Controller
{
    public function index()
    {
        $slangs = Slang::active()
            ->latest()
            ->paginate(10);

        return view('explore', compact('slangs'));
    }
}
