<?php

namespace Domain\Services\Admin;

use Infrastructure\Repositories\Admin\ElequentProvinceRepository;

class ProvinceService
{
    public function __construct(public ElequentProvinceRepository $elequentProvinceRepository){}


    public function all()
    {
        return $this->elequentProvinceRepository->all();
    }

    public function create($attributes)
    {
        if ($attributes->isJson())
            return $this->elequentProvinceRepository->create($attributes->all());

        return response()->json(["message" => "request is not json"], 401);

    }

    public function edit($attributes, $category)
    {
        return $this->elequentProvinceRepository->edit($attributes, $category);
    }

    public function destroy($category)
    {
        $status = $this->elequentProvinceRepository->destroy($category);
        if ($status)
            return response()->json(["status" => "successfully", "message" => "deleted"], 200);
    }

    public function show($category)
    {
        return $this->elequentProvinceRepository->show($category);
    }

}