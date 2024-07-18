<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GajiController;
// test front end
// Route::get('/', function () {
//     return view('blank');
// });

// test back end

// Route::get('/login', function () {
//     return view('Auth.login');
// });

// controller resource





Route::get('/', [TempatController::class, 'index2'])->name('dashboard');
Route::get('tempat/inventori/{tempat}', [TempatController::class, 'tempat_inventori'])->name('tempat.inventori');
// Route::get('/', [TempatController::class, 'index2']);


// Route::resource('inventori', InventoriController::class);



Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('auth', [AuthController::class, 'customLogin'])->name('auth');






// Route::get('/getUser',[TeamController::class,'getUser'])->name('getUser');

// middleware auth
Route::middleware(['auth'])->group(function () {

    // all role
    Route::get('/backend', function () {
        return view('blank2');
    });

    Route::get('logout', [AuthController::class, 'signout'])->name('logout');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
});

Route::middleware(['auth','isAdmin'])->group(function () {

    // role admin
    Route::resource('barang', BarangController::class);

    Route::resource('tempat', TempatController::class);

    Route::get('inventori', [InventoriController::class, 'index'])->name('inventori.index');
    Route::get('inventori/{tempat}', [InventoriController::class, 'index2'])->name('inventori.index2');
    Route::get('inventori/team/{team}', [InventoriController::class, 'index3'])->name('inventori.index3');
    Route::get('inventori/create/{team}', [InventoriController::class, 'create'])->name('inventori.create');
    Route::post('inventori/create/store', [InventoriController::class, 'store'])->name('inventori.store');
    Route::delete('inventori/delete/{inventori}', [InventoriController::class, 'destroy'])->name('inventori.destroy');
    Route::get('inventori/edit/{inventori}', [InventoriController::class, 'edit'])->name('inventori.edit');
    Route::put('inventori/update/{inventori}', [InventoriController::class, 'update'])->name('inventori.update');

    Route::get('user', [UserController::class, 'index'])->name('user.index');
    
    Route::get('user/{tempat}', [UserController::class, 'index2'])->name('user.index2');
    Route::get('user/create/{tempat}', [UserController::class, 'create'])->name('user.create');
    Route::post('user/create/store', [UserController::class, 'store'])->name('user.store');
    Route::delete('user/delete/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('user/update/{user}', [UserController::class, 'update'])->name('user.update');

    Route::get('team', [TeamController::class, 'index'])->name('team.index');
    Route::get('team/{tempat}', [TeamController::class, 'index2'])->name('team.index2');
    Route::get('team/create/{tempat}', [TeamController::class, 'create'])->name('team.create');
    Route::post('team/create/store', [TeamController::class, 'store'])->name('team.store');
    Route::delete('team/delete/{team}', [TeamController::class, 'destroy'])->name('team.destroy');
    Route::get('team/edit/{team}', [TeamController::class, 'edit'])->name('team.edit');
    Route::put('team/update/{team}', [TeamController::class, 'update'])->name('team.update');

    Route::get('gaji/{user}', [GajiController::class, 'index'])->name('gaji.index');
    Route::get('gaji/create/{user}', [GajiController::class, 'create'])->name('gaji.create');
    Route::post('gaji/create/store', [GajiController::class, 'store'])->name('gaji.store');
    Route::delete('gaji/delete/{gaji}', [GajiController::class, 'destroy'])->name('gaji.destroy');
    Route::get('gaji/edit/{gaji}', [GajiController::class, 'edit'])->name('gaji.edit');
    Route::put('gaji/update/{gaji}', [GajiController::class, 'update'])->name('gaji.update');

    
});