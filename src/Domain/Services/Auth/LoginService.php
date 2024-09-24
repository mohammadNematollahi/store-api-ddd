<?php

namespace Domain\Services\Auth;

use Illuminate\Support\Facades\Auth;
use Domain\Services\Auth\AuthTokenService;

class LoginService extends AuthTokenService
{

    public function login($attributes)
    {
        if (!Auth::attempt($attributes))  return response()->json("user is not find if you don't register please first regester", 200);

        $user = Auth::user();

        $token = $this->createToken($user);

        return response()->json([
            "message" => "success",
            "user" => $user,
            "token" => $token
        ] , 200);
    }

}