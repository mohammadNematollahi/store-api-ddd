<?php

namespace Infrastructure\Http\Controllers\Api\Admin;

use Domain\Entities\Brand\Brand;
use Domain\Services\Admin\BrandService;
use Infrastructure\Http\Controllers\Controller;
use Infrastructure\Http\Requests\Brand\BrandRequest;

class BrandController extends Controller
{
    public function __construct(public BrandService $brandService)
    {
    }
    public function index()
    {
        return $this->brandService->all();
    }

    public function create(BrandRequest $request)
    {
        return $this->brandService->create($request);
    }

    public function edit(BrandRequest $request, Brand $brand)
    {
        return $this->brandService->edit($request->all(), $brand);
    }

    public function destroy(Brand $brand)
    {
        return $this->brandService->destroy($brand);
    }
    public function show(Brand $brand)
    {
        return $this->brandService->show($brand);
    }
}