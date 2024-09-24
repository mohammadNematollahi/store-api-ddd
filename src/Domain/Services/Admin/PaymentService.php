<?php

namespace Domain\Services\Admin;

use Infrastructure\Repositories\Admin\ElequentPeymentRepository;

class  PaymentService
{

    public function __construct(public ElequentPeymentRepository $elequentPeymentRepository){}

    public function all()
    {
        return $this->elequentPeymentRepository->all();
    }

    public function show($payment)
    {
        return $this->elequentPeymentRepository->show($payment);
    }

}