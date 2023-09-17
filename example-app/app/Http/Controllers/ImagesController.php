<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $filename = $request->image->store('uploads');
        DB::table('images')->insert(
            [
                'image' => $filename
            ]
        );
        return redirect('/');

    }

    public function show($id) {
        $image   = DB::table('images')->select("*")->where("id", $id)->first();
        $myImage = $image->image;
        return view('show', ['imageInView' => $myImage]);
    }

    public function edit($id) {
        $image = DB::table('images')->select("*")->where("id", $id)->first();
        return view('edit', ['imageInView' => $image]);
    }

    public function update(Request $request, $id) {
        $image = DB::table('images')->select("*")->where('id', $id)->first();
        Storage::delete($image->image);

        $filename = $request->image->store('uploads');
        DB::table('images')
            ->where('id', $id)
            ->update(['image' => $filename]);

        return redirect("/");
    }

    public function delete($id) {
        $image = DB::table('images')->select("*")->where('id', $id)->first();
        Storage::delete($image->image);

        DB::table('images')->where('id', $id)->delete();
        return redirect('/');
    }
}
