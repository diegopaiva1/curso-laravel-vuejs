<?php

namespace App\Repositories;

use App\Repositories\Eloquent\BaseRepository;


class UserRepository extends BaseRepository
{
    public function model()
    {
        return 'App\User';
    }

}