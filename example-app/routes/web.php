<?php

namespace App\Http\Controllers;

use App\Http\Controllers\WorksController;
use App\Http\Middleware\Authenticate;
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

Route::controller(WorksController::class)->group(function () {
    Route::get('/page', 'page');
    Route::get('/page/{id}', 'page');
    Route::get('/test', 'test');
    Route::post('/validate/check', 'check');
    Route::get('/collections', 'collection');
    Route::get('/log-in', 'login')->name('login');


    Route::middleware(['auth'])->group(function () {
        Route::get('/validate', 'validateForm');
        Route::get('/page/middleware', 'page');
    });
});


Route::controller(HomeController::class)->group(function () {
    Route::get('/404', 'error404');
    Route::get('/about', 'about');


    Route::middleware('admin')->group(function () {
        Route::get('/page_admin', 'page_admin');
    });
});
