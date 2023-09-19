<?php

namespace App\Http\Controllers;

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


Route::get('/page', [ImagesController::class, 'page']);
Route::get('/page/{id}', [ImagesController::class, 'page']);

Route::get('/test', function (Request $request) {
    dd($request->has("id"));
});

Route::get('/validate', [ImagesController::class, 'validateForm'])->middleware('auth');;

Route::middleware('admin')->group(function () {

    Route::controller(HomeController::class)->group(function () {
        Route::get('/about', 'about');
    });

});

Route::post('/validate/check', [ImagesController::class, 'check']);


Route::middleware('auth')->group(function () {
    Route::get('/page/middleware', [ImagesController::class, 'page']);
});

Route::get('/page/login', [ImagesController::class, 'page'])->name('login');

Route::get('/404', function (){
    abort('404');
});


Route::get('/collections', [ImagesController::class, 'collection']);



