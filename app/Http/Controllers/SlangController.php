<?php

namespace App\Http\Controllers;

use App\Models\Slang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SlangController extends Controller
{
    public function explore()
    {
        // show only approved slangs
        $slangs = Slang::where('status', 'approved')->latest()->get();

        return view('explore', compact('slangs'));
    }

    public function create()
    {
        return view('addslang');
    }

    public function store(Request $request)
    {
        Slang::create([
            'user_id' => Auth::id(),
            'word' => $request->word,
            'meaning' => $request->meaning,
            'example' => $request->example ?? '',
            'status' => 'pending',
        ]);

        return redirect('/explore');
    }

    public function approve($id)
    {
        $slang = Slang::findOrFail($id);

        $slang->status = 'approved';
        $slang->save();

        return back();
    }

    public function destroy($id)
    {
        $slang = Slang::findOrFail($id);
        $slang->delete();

        return back();
    }

    public function search(Request $request)
    {
        $query = $request->search;

        $slangs = Slang::where('status', 'approved')
            ->where(function ($q) use ($query) {
                $q->where('word', 'LIKE', "%$query%")
                    ->orWhere('meaning', 'LIKE', "%$query%");
            })
            ->get();

        return view('explore', compact('slangs'));
    }

    public function edit($id)
{
    $slang = Slang::findOrFail($id);

    // prevent editing others' slang
    if ($slang->user_id != Auth::id()) {
        abort(403);
    }

    return view('editslang', compact('slang'));
}


public function update(Request $request, $id)
{
    $slang = Slang::findOrFail($id);

    if ($slang->user_id != Auth::id()) {
        abort(403);
    }

    $slang->update([
        'word' => $request->word,
        'meaning' => $request->meaning
        // 'example' => $request->example
    ]);

    return redirect('/dashboard')->with('success','Slang updated!');
}
}
