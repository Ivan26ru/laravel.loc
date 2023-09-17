<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class ImageService
{
    /**
     * Взять все картинки
     * @return array
     */
    public function all() {
        $images   = DB::table('images')
            ->select('*')
            ->get();
        $myImages = $images->all();
        return $myImages;
    }


}
