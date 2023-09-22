<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about() {
        return view('about');
    }

    public function error404() {
        abort('404');
    }

}
