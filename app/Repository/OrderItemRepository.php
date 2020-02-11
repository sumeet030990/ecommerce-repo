<?php

namespace App\Repository;

use App\Models\OrderItem;
use App\Repository\Repository;

class OrderItemRepository extends Repository
{
    /**
     * OrderItem model object
     * @var OrderItem
     */
    protected $model;
    
    /**
     * @param $model
     */
    public function __construct(OrderItem $model)
    {
        $this->model = $model;
    }   
}
