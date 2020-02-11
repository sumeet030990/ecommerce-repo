<?php

namespace App\Repository;

use App\Models\Category;
use App\Repository\Repository;

class CategoryRepository extends Repository
{
    /**
     * Category model object
     * @var Category
     */
    protected $model;
    
    /**
     * @param $model
     */
    public function __construct(Category $model)
    {
        $this->model = $model;
    }
}
