<?php

namespace App\Services;

use App\Repository\CategoryRepository;
use App\Models\Category;

class CategoryService
{
     /**
     * Category service object.
     *
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Get Category Specific Products
     * 
     * @param String
     * @return Category
     */
    public function getCategoryFromSlug(String $category): Category
    {
        return $this->categoryRepository->findWhere([
            'slug' => $category
        ]);
    }
}
