<?php

namespace Infrastructure\Http\Controllers\Api\Admin;

use Domain\Entities\Province\Province;
use Domain\Services\Admin\ProvinceService;
use Infrastructure\Http\Controllers\Controller;
use Infrastructure\Http\Requests\Api\Admin\ProvinceRequest;

class ProvinceController extends Controller
{
    public function __construct(public ProvinceService $provinceService){}
    
    public function index()
    {
        return $this->provinceService->all();
    }

    public function create(ProvinceRequest $request)
    {
        return $this->provinceService->create($request);
    }

    public function edit(ProvinceRequest $request, Province $province)
    {
        return $this->provinceService->edit($request->all(), $province);
    }

    public function destroy(Province $province)
    {
        return $this->provinceService->destroy($province);
    }
    public function show(Province $province)
    {
        return $this->provinceService->show($province);
    }
}