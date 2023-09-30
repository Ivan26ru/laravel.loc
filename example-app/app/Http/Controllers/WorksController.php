<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class WorksController extends Controller
{


    public function page($id = 'no id') {
        return view('page', ['id' => $id]);
    }


    public function validateForm() {
        return view('validate');
    }

    public function check(Request $request) {
        $title = $request->old('title');
        $this->validate($request, [
            'title' => 'required',
            'desc'  => 'required',
        ]);

        dd($request->all());
    }

    public function collection() {
        return view('collection');
    }

    public function test(Request $request) {
        dd($request->has("id"));
    }

    public function login() {
        return view('login');
    }
    public function eloquent() {

//dd(Posts::all());

        return view('eloquent');
    }

    public function page_admin() {
        return view('login');
    }
}
