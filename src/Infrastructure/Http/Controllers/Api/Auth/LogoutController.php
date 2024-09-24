<?php

namespace Infrastructure\Http\Controllers\Api\Auth;

use Domain\Services\Auth\LogoutService;
use Infrastructure\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function __construct(public LogoutService $logoutService){}
    
    public function logout()
    {
        return $this->logoutService->logout();
    }
}