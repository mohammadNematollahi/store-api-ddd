<?php

namespace Infrastructure\Repositories\Admin;

use Domain\Entities\Payment\Payment;
use Domain\Repositories\Admin\PeymentRepository;
use Infrastructure\Http\Resources\Admin\PaymentResource;

class ElequentPeymentRepository implements PeymentRepository
{
    public function all()
    {
        return PaymentResource::collection(Payment::all()->load("user"));
    }

    public function show($payment)
    {
        return new PaymentResource($payment->load("user"));
    }

}