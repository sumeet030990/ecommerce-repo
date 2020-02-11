<?php

namespace App\Services;

use Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Repository\OrderItemRepository;

class OrderItemService
{
     /**
     * Order repository object.
     *
     * @var OrderItemRepository
     */
    protected $orderItemRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        OrderItemRepository $orderItemRepository
    ){
        $this->orderItemRepository = $orderItemRepository;
    }

    /**
     * Save Order Items
     * 
     * @param Order
     */
    public function saveOrderItems(Order $order): bool
    {
        return OrderItem::insert($this->getCartData($order));
    }

    private function getCartData(Order $order)
    {
        $cartItems = [];
        foreach (\Cart::session(Auth::user()->id)->getContent() as $cartData) {
            array_push($cartItems, [
                'order_id' => $order->id,
                'product_id' => $cartData->id,
                'price' => $cartData->price,
                'quantity' => $cartData->quantity,
                'total' => $cartData->getPriceSum()
            ]);
        }
        return $cartItems;
    }
}
