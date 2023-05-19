<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcesoController;
use App\Http\Controllers\UsuarioController;
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
    return view('/auth.login');
});


//
//Auth::routes();

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

   // Route::get('/' , [ProcesoController::class, 'index'])->name('home');
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');/*
*****************************
    Route::get('/proceso', function () {
        return view('/proceso/index');
    })->name('Proceso');

    Route::get('/proceso/create', function () {
        return view('/proceso/create');
    })->name('Creates');

    Route::get('/proceso/edit', function () {
        return view('/proceso/edit');
    })->name('Creates');*/

    Route::resource('proceso',ProcesoController::class);
    Route::resource('usuario',UsuarioController::class);


});
