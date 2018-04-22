<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Container\Container as Application;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;

    abstract public function model();

    public function __construct(Application $app)
    {
        $this->model = $app->make($this->model());
    }

    public function all()
    {
        return $this->model->all();
    }

    public function paginate($perPage = 10)
    {
        return $this->model->paginate($perPage);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function destroy($id)
    {
        return $this->model->delete($id);
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($id, array $data)
    {
        $modelInstance = $this->model->find($id);
        $modelInstance->update($data);
        $modelInstance->save();
    }

    public function findBy($field, $value)
    {
        return $this->model->where($field, $value)->get();
    }
}