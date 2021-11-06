<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\GuestController;
use App\Models\Guest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Events routes
Route::resource('events', EventController::class);

// Guests routes
Route::put('/guests/{id}', [GuestController::class, 'update'])->name('guests.update');
Route::get('/guests/edit/{id}', [GuestController::class, 'edit'])->name('guests.edit');
Route::delete('/guests/{id}', [GuestController::class, 'destroy'])->name('guests.destroy');
Route::post('/guests/{id}', [GuestController::class, 'show'])->name('guests.show');
Route::post('/guests', [GuestController::class, 'store'])->name('guests.store');
Route::get('/guests', [GuestController::class, 'index'])->name('guests.index');
// Transform to JSON
Route::get('/convert-guest-to-json', function () {
    return Guest::paginate(5);
});
