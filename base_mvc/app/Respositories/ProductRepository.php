<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Product;
class ProductRepository extends BaseRepository
{
    protected $model;

    /**
     * @param $model
     */
    public function __construct(Product $model)
    {
        $this->model = $model;
    }


}