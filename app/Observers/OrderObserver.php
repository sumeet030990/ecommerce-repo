<?php

namespace App\Observers;

use App\Models\Order;
use App\Services\OrderItemService;
use Auth;

class OrderObserver
{
    /**
     * OrderItemService object
     * @var OrderItemService
     */
    protected $orderItemService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        OrderItemService $orderItemService
    ) {
        $this->orderItemService = $orderItemService;
    }

    /**
     * Handle the order "created" event.
     *
     * @param  Order  $order
     * @return void
     */
    public function created(Order $order)
    {
        $this->orderItemService->saveOrderItems($order);

        \Cart::session(Auth::user()->id)->clear();
    }

    /**
     * Handle the order "updated" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function updated(Order $order)
    {
        //
    }

    /**
     * Handle the order "deleted" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the order "restored" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the order "force deleted" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }
}
