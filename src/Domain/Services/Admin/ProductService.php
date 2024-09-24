<?php

namespace Domain\Services\Admin;

use Infrastructure\Repositories\Admin\ElequentProductRepository;

class ProductService
{

    public function __construct(public ElequentProductRepository $elequentProductRepository){}


    public function all()
    {
        return $this->elequentProductRepository->all();
    }

    public function create($attributes)
    {
        if ($attributes->isJson())
            return $this->elequentProductRepository->create($attributes->all());

        return response()->json(["message" => "request is not json"], 401);

    }

    public function edit($attributes, $category)
    {
        return $this->elequentProductRepository->edit($attributes, $category);
    }

    public function destroy($category)
    {
        $status = $this->elequentProductRepository->destroy($category);
        if ($status)
            return response()->json(["status" => "successfully", "message" => "deleted"], 200);
    }

    public function show($category)
    {
        return $this->elequentProductRepository->show($category);
    }

}