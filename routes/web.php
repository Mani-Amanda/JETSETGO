<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotDashboardController;
use App\Http\Controllers\EngineerDashboardController;
use App\Http\Controllers\AircraftController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['role.pilot'])->group(function () {
    Route::get('/pilot/dashboard', [PilotDashboardController::class, 'index'])->name('pilot.dashboard');
});

Route::middleware(['role.engineer'])->group(function () {
    Route::get('/engineer/dashboard', [EngineerDashboardController::class, 'index'])->name('engineer.dashboard');
});

// This route is already defined for displaying aircraft list
Route::get('/aircrafts', [AircraftController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // Add more routes that need authentication here
});
Route::get('requestflight/{type}/{frame}', function ($type, $frame) {
    return view('requestpage', compact('type', 'frame'));
})->name('request.flight');

Route::post('create-aircraft', [AircraftController::class, 'create'])->name('create.aircraft');
Route::post('/create-request', [App\Http\Controllers\PilotRequestController::class, 'create'])->name('create.request');




require __DIR__.'/auth.php';