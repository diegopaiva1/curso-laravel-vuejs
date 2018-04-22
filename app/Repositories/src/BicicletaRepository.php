<?php

namespace App\Repositories;

use App\Repositories\Eloquent\BaseRepository;


class BicicletaRepository extends BaseRepository
{

    public function model()
    {
        return "App\Models\Bicicleta";
    }

}