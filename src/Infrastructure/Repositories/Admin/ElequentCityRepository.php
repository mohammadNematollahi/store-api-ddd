<?php

namespace Infrastructure\Repositories\Admin;

use Domain\Entities\City\City;
use Domain\Repositories\Admin\CityRepository;
use Infrastructure\Http\Resources\Admin\CityResource;

class ElequentCityRepository implements CityRepository
{
    public function all()
    {
        return CityResource::collection(City::all()->load("province"));    
    }

    public function create($attributes)
    {
        return City::create($attributes);
    }

    public function edit($attributes , $city)
    {
        return $city->update($city);
    }

    public function destroy($city)
    {
        return $city->delete();
    }

    public function show($city)
    {
        return new CityResource($city->load("province"));
    }
}