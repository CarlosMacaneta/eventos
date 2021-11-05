<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\GuestController;
use App\Models\Event;
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
    return view('events.index');
});

Auth::routes();

// Events routes
Route::get('/events/register', [EventController::class, 'create'])->name('events.create');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->name('events.edit');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
// Transform to JSON
Route::get('/convert-event-to-json', function () {
    return Event::paginate(5);
});

// Guests routes
Route::get('/guests/register', [GuestController::class, 'create'])->name('guests.create');
Route::post('/guests', [GuestController::class, 'store'])->name('guests.store');
Route::get('/guests', [GuestController::class, 'index'])->name('guests.index');
Route::post('/guests/{id}', [GuestController::class, 'show'])->name('guests.show');
Route::get('/guests/{id}', [GuestController::class, 'edit'])->name('guests.edit');
Route::put('/guests/{id}', [GuestController::class, 'update'])->name('guests.update');
Route::delete('/guests/{id}', [GuestController::class, 'destroy'])->name('guests.destroy');
// Transform to JSON
Route::get('/convert-guest-to-json', function () {
    return Guest::paginate(5);
});
