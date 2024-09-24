<?php

namespace Domain\Services\Admin;

use Infrastructure\Repositories\Admin\ElequentUserRepository;

class UserService
{

    public function __construct(public ElequentUserRepository $elequentUserRepository){}

    public function all()
    {
        return $this->elequentUserRepository->all();
    }

}