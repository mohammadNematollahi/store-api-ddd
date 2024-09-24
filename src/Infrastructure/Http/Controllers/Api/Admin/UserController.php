<?php

namespace Infrastructure\Http\Controllers\Api\Admin;

use Domain\Services\Admin\UserService;
use Infrastructure\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct(public UserService $userService){}
    public function index()
    {
        return $this->userService->all();
    }
}