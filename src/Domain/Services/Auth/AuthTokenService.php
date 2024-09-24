<?php

namespace Domain\Services\Auth;

class AuthTokenService
{
    public function createToken($user)
    {
        return $user->createToken("token_access")->plainTextToken;
    }

    public function deleteToken()
    {
        auth()->user()->tokens()->delete();
    }

}