<?php

namespace App\Services;

use Auth;
use App\Models\Product;
use App\Repository\ProductRepository;
use Illuminate\Database\Eloquent\Collection;

class ProductService
{
     /**
     * ProductServices service object.
     *
     * @var ProductServicesRepository
     */
    protected $productRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ProductRepository $productRepository
    ){
        $this->productRepository = $productRepository;
    }

    /**
     * Get Collection of All Products
     * 
     * @return Collection
     */
    public function getAllData(): Collection
    {
        return $this->productRepository->all();
    }

    /**
     * Get Category Specific Products
     * 
     * @param int
     * @return Collection
     */
    public function getCategoryWiseProductData(int $productCategoryId): Collection
    {
        return $this->productRepository->findAllWhere([
            'category_id' => $productCategoryId
        ]);
    }

    /**
     * Store Products
     * 
     * @param Array
     * @return Product
     */
    public function saveProduct(Array $data): Product
    {
        return $this->productRepository->store([
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'category_id' => $data['category'],
        ]);
    }

    /**
     * update Products
     * 
     * @param Array
     * @param Product
     * @return Product
     */
    public function updateProduct(Array $data, Product $product): Product
    {
        return $this->productRepository->update($product->id, [
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'category_id' => $data['category'],
        ]);
    }

    /**
     * Delete Products
     * 
     * @param int
     * @return bool
     */
    public function deleteProduct(int $productId): bool
    {
        return $this->productRepository->delete($productId);
    }
}
