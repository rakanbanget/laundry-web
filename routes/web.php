<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\homeController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;

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

Route::get('outlet', [OutletController::class, 'index'])->name('outlet.index');
Route::get('outlet/create', [OutletController::class, 'create'])->name('outlets.create'); 
Route::post('outlet/store', [OutletController::class, 'store'])->name('outlets.store');
Route::get('outlet/edit/{id}', [OutletController::class, 'edit'])->name('outlets.edit');
Route::post('outlet/update/{id}', [OutletController::class, 'update'])->name('outlets.update');
Route::delete('outlet/delete{id}', [OutletController::class, 'destroy'])->name('outlets.destroy');

// Route::get('paket', [PaketController::]);
Route::post('login', [Authcontroller::class, 'login']);

Route::resource('home', homeController::class);
