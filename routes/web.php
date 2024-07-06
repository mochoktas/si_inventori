<?php

use Illuminate\Support\Facades\Route;

// test front end
// Route::get('/', function () {
//     return view('blank');
// });

// test back end
Route::get('/backend', function () {
    return view('blank2');
});
// Route::get('/login', function () {
//     return view('Auth.login');
// });

// controller resource
use App\Http\Controllers\BarangController;
Route::resource('barang', BarangController::class);

use App\Http\Controllers\TempatController;
Route::resource('tempat', TempatController::class);
Route::get('/', [TempatController::class, 'index2']);

use App\Http\Controllers\InventoriController;
Route::resource('inventori', InventoriController::class);

use App\Http\Controllers\AuthController;
Route::get('login', [AuthController::class, 'index'])->name('login');

use App\Http\Controllers\UserController;
Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::get('user/{tempat}', [UserController::class, 'index2'])->name('user.index2');
Route::get('user/create/{tempat}', [UserController::class, 'create'])->name('user.create');
Route::post('user/create/store', [UserController::class, 'store'])->name('user.store');
Route::delete('user/delete/{user}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/update/{user}', [UserController::class, 'update'])->name('user.update');

use App\Http\Controllers\TeamController;
Route::get('team', [TeamController::class, 'index'])->name('team.index');
Route::get('team/{tempat}', [TeamController::class, 'index2'])->name('team.index2');
Route::get('team/create/{tempat}', [TeamController::class, 'create'])->name('team.create');
Route::post('team/create/store', [TeamController::class, 'store'])->name('team.store');
Route::delete('team/delete/{team}', [TeamController::class, 'destroy'])->name('team.destroy');
Route::get('team/edit/{team}', [TeamController::class, 'edit'])->name('team.edit');
Route::put('team/update/{team}', [TeamController::class, 'update'])->name('team.update');
// Route::get('/getUser',[TeamController::class,'getUser'])->name('getUser');

