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

// controller resource
use App\Http\Controllers\BarangController;
Route::resource('barang', BarangController::class);

use App\Http\Controllers\TempatController;
Route::resource('tempat', TempatController::class);
Route::get('/', [TempatController::class, 'index2']);


