<?php

namespace App\Repositories\Contracts;

interface RepositoryInterface
{
    public function all();

    public function paginate($perPage = 10);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);

    public function find($id);

    public function findBy($field, $value);
}