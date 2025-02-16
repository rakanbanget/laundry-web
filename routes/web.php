<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\homeController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\UserController;
use App\Models\User;

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

Route::get('paket', [PaketController::class, 'index'])->name('pakets.paket');
Route::get('paket/create', [PaketController::class, 'create'])->name('pakets.create');
Route::post('paket/store', [PaketController::class, 'store'])->name('pakets.store');

Route::get('pengguna', [UserController::class, 'index'])->name('penggunas.pengguna');
Route::get('pengguna/create', [UserController::class, 'create'])->name('penggunas.create');
Route::post('pengguna/store', [UserController::class, 'store'])->name('penggunas.store');
Route::get('pengguna/edit/{id}', [UserController::class, 'edit'])->name('penggunas.edit');
Route::post('pengguna/update/{id}', [UserController::class, 'update'])->name('penggunas.update');
Route::delete('pengguna/delete/{id}', [UserController::class, 'destroy'])->name('penggunas.destroy');


Route::post('login', [Authcontroller::class, 'login']);

Route::resource('home', homeController::class);
