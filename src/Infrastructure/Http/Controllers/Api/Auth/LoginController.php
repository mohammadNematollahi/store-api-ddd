<?php

namespace Infrastructure\Http\Controllers\Api\Auth;

use Domain\Services\Auth\LoginService;
use Infrastructure\Http\Controllers\Controller;
use Infrastructure\Http\Requests\Api\Auth\LoginRequest;

class LoginController extends Controller
{
    public function __construct(public LoginService $loginService){}
    

    public function login(LoginRequest $request)
    {
        $attributes = $request->only(["password" , "email"]);
        return $this->loginService->login($attributes);
    }
}