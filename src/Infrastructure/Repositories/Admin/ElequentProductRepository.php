<?php

namespace Infrastructure\Repositories\Admin;

use Domain\Entities\Product\Product;
use Domain\Repositories\Admin\ProductRepostitory;
use Infrastructure\Http\Resources\Admin\ProductResource;

class ElequentProductRepository implements ProductRepostitory
{

    public function all()
    {
        return ProductResource::collection(Product::all()->load(["brand" , "category"]));    
    }

    public function create($attributes)
    {
        return Product::create($attributes);
    }

    public function edit($attributes , $product)
    {
        return $product->update($product);
    }

    public function destroy($product)
    {
        return $product->delete();
    }

    public function show($product)
    {
        return new ProductResource($product->load(["brand" , "category"]));
    }

}