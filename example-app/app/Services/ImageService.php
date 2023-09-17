<?php

namespace App\Services;

use App\Repositories\ImagesRepository;
use App\Repositories\interfaces\ImagesRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    private ImagesRepository $imagesRepository;

    public function __construct(ImagesRepository $imagesRepository) {
        $this->imagesRepository = $imagesRepository;
    }


    /**
     * Взять все картинки
     * @return array
     */
    public function all() {
        return $this->imagesRepository->getAll();
    }

    /**
     * Сохранить картинку в бд и на сервер
     *
     * @param $image $_FILES
     *
     * @return void
     */
    public function add($image) {
        DB::table('images')->insert(
            [
                'image' => $image->store('uploads')
            ]
        );
    }

    /**
     * Получить src изображение по id
     *
     * @param $id
     *
     * @return mixed
     */

    public function one($id) {
        $image = DB::table('images')->select("*")->where("id", $id)->first();
        return $image;
    }

    public function update($id, $newImage) {
        $image = DB::table('images')->select("*")->where('id', $id)->first();
        Storage::delete($image->image);

        $filename = $newImage->image->store('uploads');
        DB::table('images')
            ->where('id', $id)
            ->update(['image' => $filename]);
    }

    public function delete($id) {
        $image = DB::table('images')->select("*")->where('id', $id)->first();
        Storage::delete($image->image);

        DB::table('images')->where('id', $id)->delete();
    }

}
