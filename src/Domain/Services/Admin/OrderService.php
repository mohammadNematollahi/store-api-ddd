<?php

namespace Domain\Services\Admin;

use Domain\Entities\Order\Order;
use Infrastructure\Repositories\Admin\ElequentOrderRepository;

class OrderService
{

    public function __construct(public ElequentOrderRepository $elequentOrderRepository){}

    public function all()
    {
        return $this->elequentOrderRepository->all();
    }

    public function show(Order $order)
    {
        return $this->elequentOrderRepository->show($order);
    }

}