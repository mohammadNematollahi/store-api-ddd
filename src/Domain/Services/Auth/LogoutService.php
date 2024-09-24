<?php

namespace Domain\Services\Auth;

use Domain\Services\Auth\AuthTokenService;

class LogoutService extends AuthTokenService
{

    public function logout()
    {
        $this->deleteToken();
        
        return response()->json([
            "message" => "logout"
        ] , 200);
    }

}