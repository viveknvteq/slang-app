
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\SlangController;
use App\Models\Slang;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $slangs = Slang::latest()->take(4)->get();
    return view('index', compact('slangs'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/explore', [ExploreController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);


/*
|--------------------------------------------------------------------------
| Authenticated User Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

      Route::get('/addslang', [SlangController::class, 'create']);
    Route::post('/addslang', [SlangController::class, 'store']);

    Route::get('/profile', function () {
        return view('profile');
    });

});


/*
|--------------------------------------------------------------------------
| Search
|--------------------------------------------------------------------------
*/

Route::get('/search', [SlangController::class, 'search'])->name('slangs.search');


/*
|--------------------------------------------------------------------------
| User Dashboard
|--------------------------------------------------------------------------
*/

Route::middleware(['auth','role:user'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'userDashboard']);

});


/*
|--------------------------------------------------------------------------
| Admin Dashboard
|--------------------------------------------------------------------------
*/

Route::middleware(['auth','role:admin'])->group(function () {

    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard']);

    Route::post('/slang/{id}/approve', [DashboardController::class, 'approve'])->name('slang.approve');

    Route::delete('/slang/{id}', [DashboardController::class, 'delete'])->name('slang.delete');

});
