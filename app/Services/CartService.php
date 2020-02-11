<?php

namespace App\Services;

use Auth;
use App\Models\Product;
use App\Repository\ProductRepository;
use Illuminate\Database\Eloquent\Collection;

class CartService
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
     * Add Product to Cart
     * 
     * @param int
     * @return bool
     */
    public function addProductToCart(int $productId): bool
    {
        $product = $this->productRepository->find($productId);
        $this->addItemToCart($product);
        
        return true;
    }

    /**
     * Add Item to Cart
     * 
     * @param Product
     * @return 
     */
    private function addItemToCart(Product $product)
    {
        if(\Cart::session(Auth::user()->id)->get($product->id)){
            \Cart::session(Auth::user()->id)->update($product->id,[
                'quantity' => 1]
            );
        } else {
            \Cart::session(Auth::user()->id)->add(array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'attributes' => array()
            ));

        }
    }

    /**
     * Remove Product to Cart
     * 
     * @param int
     * @return bool
     */
    public function removeItemFromCart(int $productId): bool
    {
        \Cart::session(Auth::user()->id)->remove($productId);

        return true;
    }
}
