<?php

namespace App\Repository;

use App\Models\Order;
use App\Repository\Repository;

class OrderRepository extends Repository
{
    /**
     * Order model object
     * @var Order
     */
    protected $model;
    
    /**
     * @param $model
     */
    public function __construct(Order $model)
    {
        $this->model = $model;
    }   
}
