<?php

namespace Infrastructure\Repositories\App;

use Domain\Entities\Product\Product;
use Domain\Repositories\App\HomeRepository;
use Infrastructure\Http\Resources\App\ProductResource;

class ElequentHomeRepository implements HomeRepository
{
    public function all()
    {
        return ProductResource::collection(Product::latest()->paginate(10));
    }
}