<?php

namespace Domain\Services\App;

use Infrastructure\Repositories\App\ElequentProductRepository;

class ProductService
{

    public function __construct(public ElequentProductRepository $elequentProductRepository){}

    public function show($product)
    {
        return $this->elequentProductRepository->show($product);
    }

}