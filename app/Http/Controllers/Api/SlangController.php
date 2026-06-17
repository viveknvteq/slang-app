<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Slang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SlangController extends Controller
{
    // GET /api/slangs (Explore)
    public function index()
    {
        $slangs = Slang::where('status', '=', 'approved', 'and')
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return response()->json($slangs);
    }

    // POST /api/slangs (Store)
    public function store(Request $request)
    {
        $request->validate([
            'word' => 'required|string|max:255|unique:slangs',
            'meaning' => 'required|string|max:1000',
            'example' => 'nullable|string|max:1000',
        ]);

        $slang = Slang::create([
            'user_id' => Auth::id(), // later token based
            'word' => $request->word,
            'meaning' => $request->meaning,
            'example' => $request->example ?? '',
            'status' => 'pending',
        ]);

        return response()->json([
            'message' => 'Slang submitted for approval',
            'data' => $slang,
        ], 201);
    }

    // GET /api/slangs/{id}
    public function show($id)
    {
        $slang = Slang::findOrFail($id);

        return response()->json($slang);
    }

    // PUT /api/slangs/{id}
    public function update(Request $request, $id)
    {
        $slang = Slang::findOrFail($id);

        if ($slang->user_id != Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $slang->update([
            'word' => $request->word,
            'meaning' => $request->meaning,
        ]);

        return response()->json([
            'message' => 'Updated successfully',
            'data' => $slang,
        ]);
    }

    // DELETE /api/slangs/{id}
    public function destroy($id)
    {
        $slang = Slang::findOrFail($id);

        if ($slang->user_id != Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $slang->delete();

        return response()->json([
            'message' => 'Deleted successfully',
        ]);
    }

    // PATCH /api/slangs/{id}/approve (Admin)
    public function approve($id)
    {
        $slang = Slang::findOrFail($id);

        $slang->status = 'approved';
        $slang->save();

        return response()->json([
            'message' => 'Slang approved',
            'data' => $slang,
        ]);
    }

    // GET /api/slangs/search?q=word
    public function search(Request $request)
    {
        $query = trim($request->input('search', ''));

        $slangs = Slang::where('status', '=', 'approved', 'and')
            ->where(function ($q) use ($query) {
                $q->where('word', 'LIKE', "%$query%")
                    ->orWhere('meaning', 'LIKE', "%$query%");
            })
            ->orderByRaw('CASE WHEN word LIKE ? THEN 0 ELSE 1 END', ["{$query}%"])
            ->limit(6)
            ->get(['word', 'meaning', 'slug']);

        return response()->json($slangs);
    }
}
