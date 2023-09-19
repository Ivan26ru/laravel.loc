<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ImagesController extends Controller
{
    private $images;

    public function __construct(ImageService $imageService) {
        $this->images = $imageService;
    }


    public function index() {
        return view('welcome', ['imagesInView' => $this->images->all()]);
    }


    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $image = $request->file('image');

        $this->images->add($image);
        return redirect('/');
    }

    public function show($id) {
        return view('show', ['imageInView' => $this->images->one($id)->image()]);
    }

    public function edit($id) {
        return view('edit', ['imageInView' => $this->images->one($id)]);
    }

    public function update(Request $request, $id) {
        $this->images->update($id, $request);
        return redirect("/");
    }

    public function delete($id) {
        $this->images->delete($id);
        return redirect('/');
    }

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


}
