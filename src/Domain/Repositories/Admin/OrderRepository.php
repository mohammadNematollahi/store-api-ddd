<?php

namespace Domain\Repositories\Admin;


interface OrderRepository
{
    public function all();
    public function show($order);
}