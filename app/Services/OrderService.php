<?php

namespace App\Services;

use Auth;
use App\Models\Order;
use App\Repository\OrderRepository;
use Illuminate\Database\Eloquent\Collection;

class OrderService
{
     /**
     * Order repository object.
     *
     * @var OrderRepository
     */
    protected $orderRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        OrderRepository $orderRepository
    ){
        $this->orderRepository = $orderRepository;
    }

    /**
     * Place order
     * 
     * @param Array
     * @return Order
     */
    public function placeOrder(Array $request): Order
    {
        return $this->orderRepository->store([
            'user_id' => Auth::user()->id,
            'first_name' => $request['firstName'],
            'last_name' => $request['lastName'],
            'email' => $request['emailAddress'],
            'address' => $request['address'],
            'total' => \Cart::session(Auth::user()->id)->getTotal()
        ]);
    }

    /**
     * Place order
     * 
     * @return Collection
     */
    public function getAllOrders(): Collection
    {
        return $this->orderRepository->all();
    }
}
