<?php

namespace Infrastructure\Repositories\Admin;

use Domain\Entities\Order\Order;
use Domain\Repositories\Admin\OrderRepository;
use Infrastructure\Http\Resources\Admin\OrderResource;

class ElequentOrderRepository implements OrderRepository
{
    public function all()
    {
        return OrderResource::collection(Order::all()->load(["user" , "payment"]));
    }
    public function show($order)
    {
        return new OrderResource($order->load(["user" , "payment"]));
    }
}