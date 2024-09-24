<?php

namespace Domain\Services\App;

use Infrastructure\Repositories\App\ElequentHomeRepository;

class HomeService
{

    public function __construct(public ElequentHomeRepository $elequentHomeRepository){}

    public function all()
    {
        return $this->elequentHomeRepository->all();
    }

}