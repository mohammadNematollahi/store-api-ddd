<?php

namespace Infrastructure\Http\Controllers\Api\Admin;

use Domain\Entities\City\City;
use Domain\Services\Admin\CityService;
use Infrastructure\Http\Controllers\Controller;
use Infrastructure\Http\Requests\Api\Admin\CityRequest;

class CityController extends Controller
{
    public function __construct(public CityService $cityService){}
    public function index()
    {
        return $this->cityService->all();
    }

    public function create(CityRequest $request)
    {
        return $this->cityService->create($request);
    }

    public function edit(CityRequest $request, City $city)
    {
        return $this->cityService->edit($request->all(), $city);
    }

    public function destroy(City $city)
    {
        return $this->cityService->destroy($city);
    }
    public function show(City $city)
    {
        return $this->cityService->show($city);
    }
}