<?php

namespace Infrastructure\Http\Controllers\Api\App;

use Domain\Services\App\PaymentService;
use Domain\Services\App\ProductService;
use Illuminate\Http\Request;
use Infrastructure\Http\Controllers\Controller;

class PaymentController extends Controller
{
    
    public function __construct(public PaymentService $paymentService) {}

    public function callback(Request $request) 
    {
        return $this->paymentService->callback($request->all());
    }

    public function payment(Request $request)
    {
        return $this->paymentService->payment($request->all());
    }

}