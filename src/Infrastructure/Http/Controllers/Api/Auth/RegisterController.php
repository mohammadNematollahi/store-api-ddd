<?php

namespace Infrastructure\Http\Controllers\Api\Auth;

use Domain\Services\Auth\RegisterService;
use Infrastructure\Http\Controllers\Controller;
use Infrastructure\Http\Requests\Api\Auth\RegisterRequest;

class RegisterController extends Controller
{
    public function __construct(public RegisterService $registerService){}
    
    public function register(RegisterRequest $request)
    {
        return $this->registerService->create($request->all());
    }
}