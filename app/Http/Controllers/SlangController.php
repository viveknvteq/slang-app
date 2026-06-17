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
        $slangs = Slang::where('status', '=', 'approved', 'and')->latest()->paginate(12);

        return view('explore', compact('slangs'));
    }

    public function create()
    {
        return view('addslang');
    }

    public function store(Request $request)
    {
        $request->validate([
            'word' => 'required|string|max:255|unique:slangs',
            'meaning' => 'required|string|max:1000',
            'example' => 'nullable|string|max:1000',
        ]);

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
        $query = trim($request->input('search', ''));

        $slangs = Slang::where('status', '=', 'approved', 'and')
            ->where(function ($q) use ($query) {
                $q->where('word', 'LIKE', "%$query%")
                    ->orWhere('meaning', 'LIKE', "%$query%");
            })
            ->orderByRaw('CASE WHEN word LIKE ? THEN 0 ELSE 1 END', ["{$query}%"])
            ->limit(6);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(
                $slangs->get(['word', 'meaning', 'slug'])
            );
        }
        // VIEW response (OBJECTS)
        $slangs = $slangs->get();

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
            'meaning' => $request->meaning,
            // 'example' => $request->example
        ]);

        return redirect('/dashboard')->with('success', 'Slang updated!');
    }
}
