<?php

namespace Infrastructure\Repositories\Admin;

use Domain\Entities\User\User;
use Domain\Repositories\Admin\UserRepository;
use Infrastructure\Http\Resources\Admin\UserResource;

class ElequentUserRepository implements UserRepository
{
    public function all()
    {
        return UserResource::collection(User::all());
    }
}