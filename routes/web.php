<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make so mething great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function ()
    {

        Route::get('/', function () {
            return view('front.index');
        });
        // Route::get('/dashboard', function () {
        //     return view('dash.index');
        // })->middleware(['auth', 'verified','dashboardAccess'])->name('dashboard');

        Route::middleware(['auth', 'verified', 'dashboardAccess'])->as('dashboard.')->prefix('dashboard')->group(function () {
            Route::get('/', function () {
                return view('dash.index');
            });
        });

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });
    }
);





require __DIR__ . '/auth.php';
