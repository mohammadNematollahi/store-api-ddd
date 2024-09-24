<?php

namespace Domain\Services\Auth;

use Domain\Services\Auth\AuthTokenService;
use Infrastructure\Repositories\Auth\ElequentRegisterRepository;

class RegisterService extends AuthTokenService
{

    public function __construct(public ElequentRegisterRepository $elequentRegisterRepository)
    {
    }

    public function create($attributes)
    {
        $user = $this->elequentRegisterRepository->create($attributes);
        $token = $this->createToken($user);

        return response()->json([
            "message" => "success",
            "user" => $user,
            "token" => $token
        ], 201);
    }

}