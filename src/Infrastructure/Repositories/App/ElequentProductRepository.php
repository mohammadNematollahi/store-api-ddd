<?php

namespace Infrastructure\Repositories\App;
use Domain\Repositories\App\ProductRepository;
use Infrastructure\Http\Resources\App\ProductResource;


class ElequentProductRepository implements ProductRepository
{
    public function show($product)
    {
        return new ProductResource($product);
    }
}