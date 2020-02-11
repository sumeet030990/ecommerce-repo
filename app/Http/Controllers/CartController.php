<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\View\View;
use Auth;

class CartController extends Controller
{
    /**
     * CartService object
     * @var CartService
     */
    protected $cartService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        CartService $cartService
    ) {
        $this->cartService = $cartService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param int 
     * @return View
     */
    public function addItemToCart(int $productId): View
    {
        $this->cartService->addProductToCart($productId);
        
        return view('frontend.checkout.cart', [
            'cartItems' => \Cart::session(Auth::user()->id)->getContent()
        ]);
    }

    /**
     * remove Item from cart
     *
     * @param int 
     * @return View
     */
    public function removeItemFromCart(int $productId): View
    {
        $this->cartService->removeItemFromCart($productId);
        
        return view('frontend.checkout.cart', [
            'cartItems' => \Cart::session(Auth::user()->id)->getContent()
        ]);
    }

    /**
     * checkout view
     *
     * @return View
     */
    public function checkout(): View
    {
        return view('frontend.checkout.checkout', [
            'cartItems' => \Cart::session(Auth::user()->id)->getContent()
        ]);
    }
}
