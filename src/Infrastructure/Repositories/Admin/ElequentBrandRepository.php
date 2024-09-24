<?php

namespace Infrastructure\Repositories\Admin;

use Domain\Entities\Brand\Brand;
use Domain\Repositories\Admin\BrandRepository;
use Infrastructure\Http\Resources\Admin\BrandResource;

class ElequentBrandRepository implements BrandRepository
{
    public function all()
    {
        return BrandResource::collection(Brand::all());    
    }

    public function create($attributes)
    {
        return Brand::create($attributes);
    }

    public function edit($attributes , $brand)
    {
        return $brand->update($attributes);
    }

    public function destroy($brand)
    {
        return $brand->delete();
    }

    public function show($brand)
    {
        return new BrandResource($brand);
    }
}