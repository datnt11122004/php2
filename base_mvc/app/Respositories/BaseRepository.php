<?php

namespace App\Repositories;
use App\Repositories\Interfaces\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;


    public function all()
    {
        return $this->model->all();
    }
}