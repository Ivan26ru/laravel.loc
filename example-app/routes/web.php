<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/store', function (Request $request) {
//    $image = $request->file('image');
    $request->image->storeAs('uploads', "image2.jpg");
    //        dd($image->getSize());
//    $filename = $image->store('uploads');

    //    dd($image->storeAs('uploads', "image.jpg"));

//    $users = DB::table('users')
    //        ->select('name', 'email as user_email')
    //        ->get();
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/edit', function () {
    return view('edit');
});
