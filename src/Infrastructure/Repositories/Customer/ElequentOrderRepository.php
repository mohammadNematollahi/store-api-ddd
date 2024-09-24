<?php

namespace Infrastructure\Repositories\Customer;

use Domain\Entities\Order\Order;
use Domain\Repositories\Customer\OrderRepository;
use Infrastructure\Http\Resources\Customer\OrderResource;

class ElequentOrderRepository implements OrderRepository
{
    public function all()
    {
        return OrderResource::collection(Order::where("user_id" , auth()->user()->id)->get()->loadMissing(["payment.user" , "user"]));
    }
}