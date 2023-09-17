<?php

namespace App\Repositories;

use App\Repositories\interfaces\ImagesRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ImagesRepository implements ImagesRepositoryInterface
{

    public function getAll() {
        // TODO: Implement getAll() method.
        $images = DB::table('images')
            ->select('*')
            ->get();
        return $images->all();
    }
}
