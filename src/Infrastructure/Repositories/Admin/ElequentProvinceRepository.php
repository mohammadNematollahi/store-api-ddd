<?php

namespace Infrastructure\Repositories\Admin;

use Domain\Entities\Province\Province;
use Domain\Repositories\Admin\ProvinceRepository;
use Infrastructure\Http\Resources\Admin\ProvinceResource;

class ElequentProvinceRepository implements ProvinceRepository
{
    public function all()
    {
        return ProvinceResource::collection(Province::all());    
    }

    public function create($attributes)
    {
        return Province::create($attributes);
    }

    public function edit($attributes , $province)
    {
        return $province->update($province);
    }

    public function destroy($province)
    {
        return $province->delete();
    }

    public function show($province)
    {
        return new ProvinceResource($province);
    }
}