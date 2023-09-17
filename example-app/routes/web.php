<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

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
Route::controller(ImagesController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/store', 'store');
    Route::get('/show/{id}', 'show');
    Route::get('/edit/{id}', 'edit');
    Route::post('/update/{id}', 'update');
    Route::get('/delete/{id}', 'delete');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/about', 'about');
});





