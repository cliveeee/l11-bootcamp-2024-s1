<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

<<<<<<< HEAD
// HTTP METHOD  Endpoint    Action  Route Name
// GET          /chirps     index   chirps.index
// POST         /chirps     store   chirps.store

Route::resource("chirps", ChirpController::class)
    ->only(["index","store"])
    ->middleware(["auth","verified"]);

require __DIR__.'/auth.php';
=======
/**
 * Table of the HTTP VERBs, the ENDPOINT URIs, CONTROLLER ACTIONs and the ROUTEs
 * interpreted when using route('ROUTE_NAME') in code.
 *
 * Verb         URI                     Action      Route Name
 * GET          /chirps                 index       chirps.index
 * POST         /chirps                 store       chirps.store
 * GET          /chirps/{chirp}/edit    edit        chirps.edit
 * PUT/PATCH    /chirps/{chirp}         update      chirps.update
 * DELETE       /chirps/{chirp}         destroy     chirps.destroy
 */
Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified'],);

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware(['auth','verified',]);


require __DIR__ . '/auth.php';
>>>>>>> upstream/main
