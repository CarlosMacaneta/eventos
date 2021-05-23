<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\GuestController;
use App\Models\Event;
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
Route::get('/eventos/registar', [EventController::class, 'create'])->name('events.create');
Route::post('/eventos', [EventController::class, 'store'])->name('events.store');
Route::get('/eventos', [EventController::class, 'index'])->name('events.index');
Route::post('/eventos/{id}', [EventController::class, 'show'])->name('events.show');
Route::get('/eventos/{id}', [EventController::class, 'edit'])->name('events.edit');
Route::put('/eventos/{id}', [EventController::class, 'update'])->name('events.update');
Route::delete('/eventos/{id}', [EventController::class, 'destroy'])->name('events.destroy');
// Transform to JSON
Route::get('/convert-event-to-json', function () {
    return Event::paginate(5);
});

// Guests routes
Route::get('/convidados/registar', [GuestController::class, 'create'])->name('guests.create');
Route::post('/convidados', [GuestController::class, 'store'])->name('guests.store');
Route::get('/convidados', [GuestController::class, 'index'])->name('guests.index');
Route::post('/convidados/{id}', [GuestController::class, 'show'])->name('guests.show');
Route::get('/convidados/{id}', [GuestController::class, 'edit'])->name('guests.edit');
Route::put('/convidados/{id}', [GuestController::class, 'update'])->name('guests.update');
Route::delete('/convidados/{id}', [GuestController::class, 'destroy'])->name('guests.destroy');
// Transform to JSON
Route::get('/convert-guest-to-json', function () {
    return App\Models\Guest::paginate(5);
});
