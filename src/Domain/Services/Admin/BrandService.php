<?php

namespace Domain\Services\Admin;

use Infrastructure\Repositories\Admin\ElequentBrandRepository;

class BrandService
{

    public function __construct(public ElequentBrandRepository $elequentBrandRepository){}
    public function all()
    {
        return $this->elequentBrandRepository->all();
    }

    public function create($attributes)
    {
        if ($attributes->isJson())
            return $this->elequentBrandRepository->create($attributes->all());

        return response()->json(["message" => "request is not json"], 401);

    }

    public function edit($attributes, $brand)
    {
        return $this->elequentBrandRepository->edit($attributes, $brand);
    }

    public function destroy($brand)
    {
        $status = $this->elequentBrandRepository->destroy($brand);
        if ($status)
            return response()->json(["status" => "successfully", "message" => "deleted"], 200);
    }

    public function show($brand)
    {
        return $this->elequentBrandRepository->show($brand);
    }

}