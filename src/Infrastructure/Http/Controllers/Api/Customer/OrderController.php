<?php

namespace Infrastructure\Http\Controllers\Api\Customer;

use Domain\Services\Customer\OrderService;
use Infrastructure\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct(public OrderService $orderService){}
    
    //
}