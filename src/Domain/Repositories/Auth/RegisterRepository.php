<?php

namespace Domain\Repositories\Auth;

interface RegisterRepository
{
    public function create($attributes);
}