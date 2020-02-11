<?php

namespace App\Repository;

use App\Models\Product;
use App\Repository\Repository;

class ProductRepository extends Repository
{
    /**
     * Product model object
     * @var Product
     */
    protected $model;
    
    /**
     * @param $model
     */
    public function __construct(Product $model)
    {
        $this->model = $model;
    }   
}
