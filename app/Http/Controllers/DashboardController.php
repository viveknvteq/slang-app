<?php

namespace App\Http\Controllers;

use App\Models\Slang;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalSlangs = Slang::count();
        $pendingSlangs = Slang::where('status', 'pending')->count();
        $slangs = Slang::where('status', 'pending')->latest()->get();

        return view('dashboard', compact(
            'totalUsers',
            'totalSlangs',
            'pendingSlangs',
            'slangs'
        ));
    }

    public function adminDashboard()
    {
        return view('dashboard.admin', [
            'totalSlangs' => Slang::count(),
            'totalUsers' => User::count(),
            'pendingSlangs' => Slang::where('status', 'pending')->count(),
            'slangs' => Slang::where('status', 'pending')->latest()->get(),
        ]);
    }

    public function userDashboard()
    {
        $userId = Auth::id();

        $mySlangs = Slang::where('user_id', $userId)->count();

        $approvedSlangs = Slang::where('user_id', $userId)
            ->where('status', 'approved')
            ->count();

        $pendingSlangs = Slang::where('user_id', $userId)
            ->where('status', 'pending')
            ->count();

        // Get user's slang list
        $slangs = Slang::where('user_id', $userId)
            ->latest()
            ->get();

        return view('dashboard.user', compact(
            'mySlangs',
            'approvedSlangs',
            'pendingSlangs',
            'slangs'   // IMPORTANT
        ));
    }

    public function approve($id)
    {
        $slang = Slang::findOrFail($id);
        $slang->status = 'approved';
        $slang->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $slang = Slang::findOrFail($id);
        $slang->delete();

        return redirect()->back();
    }
}
