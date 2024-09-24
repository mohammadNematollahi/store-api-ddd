<?php

namespace Infrastructure\Http\Controllers\Api\Admin;

use Domain\Entities\Order\Order;
use Domain\Services\Admin\OrderService;
use Infrastructure\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct(public OrderService $orderService){}

    public function index()
    {
        return $this->orderService->all();
    }

    public function show(Order $order)
    {
        return $this->orderService->show($order);
    }
}