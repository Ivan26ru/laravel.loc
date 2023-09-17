<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', [ImagesController::class, 'index']);

Route::get('/about', [ImagesController::class, 'about']);

Route::get('/create', [ImagesController::class, 'create']);

Route::post('/store', [ImagesController::class, 'store']);

Route::get('/show/{id}', [ImagesController::class, 'show']);

Route::get('/edit/{id}', [ImagesController::class, 'edit']);

Route::post('/update/{id}', [ImagesController::class, 'update']);

Route::get('/delete/{id}', [ImagesController::class, 'delete']);
