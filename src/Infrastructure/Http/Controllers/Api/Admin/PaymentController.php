<?php

namespace Infrastructure\Http\Controllers\Api\Admin;

use Domain\Entities\Payment\Payment;
use Domain\Services\Admin\PaymentService;
use Infrastructure\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function __construct(public PaymentService $paymentService){}

    public function index()
    {
        return $this->paymentService->all();
    }

    public function show(Payment $payment)
    {
        return $this->paymentService->show($payment);
    }
}