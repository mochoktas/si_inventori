<?php

use Illuminate\Support\Facades\Route;

// test front end
Route::get('/', function () {
    return view('blank');
});

// test back end
Route::get('/backend', function () {
    return view('blank2');
});

// controller resource
Route::resources([
    'tempat' => TempatController::class,
    'barang' => BarangController::class,
]);