<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\homeController;

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

Route::get('login', [Authcontroller::class, 'index']);

Route::get('/outlet', function() {
    return view('outlets.outlet');
})->name('outlet.table');

Route::post('login', [Authcontroller::class, 'login']);

Route::resource('home', homeController::class);
