<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    $images = DB::table('images')
        ->select('*')
        ->get();

    $myImages = $images->pluck('image')->all();

    return view('welcome', ['imagesInView' => $myImages]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/store', function (Request $request) {
    $filename = $request->image->store('uploads');
    DB::table('images')->insert(
        [
            'image' => $filename
        ]
    );


    return redirect('/');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/edit', function () {
    return view('edit');
});
