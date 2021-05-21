<?php

use App\Http\Controllers\EventController;
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

Route::get('/ww', [EventController::class, 'index'])->name('events.index');
Route::get('/eventos/registar', [EventController::class, 'create'])->name('events.create');
Route::get('/eventos/detalhes', function () {
    return view('events/detail');
});

Route::get('/eventos/registar', function() {
    return view('events/create');
});
Route::get('/', function () {
    return view('events.index');
});
