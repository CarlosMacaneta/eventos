<?php

use App\Http\Controllers\HelloWorldController;
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

/*
| Routes with dynamic parameters
| Indicating ? after the parameter means not mandatory parameter
| When your parament is not mandatory you might give a default value on the function param
*/
/*Route::get('/hello/{name}', function ($name) {
    return "Hello, ". $name;
});*/
//non mandatory param
/*Route::get('/hello/{id?}', function ($id = "-1") {
    return "Hello, ". $id;
});*/

/*
| Routes with controllers
| Route::function(page, [Controller class, method name]);
*/
/*Route::get('/hello', [HelloWorldController::class, 'helloworld'//]);

Route::get('/hello/{name?}', [HelloWorldController::class, 'hello']);*/

Auth::routes();

Route::get('/eventos', [App\Http\Controllers\EventController::class, 'index'])->name('events');
