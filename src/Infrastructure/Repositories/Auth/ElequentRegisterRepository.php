<?php

namespace Infrastructure\Repositories\Auth;

use Domain\Entities\User\User;
use Domain\Repositories\Auth\RegisterRepository;

class ElequentRegisterRepository implements RegisterRepository
{
    public function create($attributes)
    {
        return User::create($attributes);
    }
}