<?php

namespace Domain\Services\Admin;

use Infrastructure\Repositories\Admin\ElequentCategoryRepository;

class CategoryService
{

    public function __construct(public ElequentCategoryRepository $elequentCategoryRepository){}

    public function all()
    {
        return $this->elequentCategoryRepository->all();
    }

    public function create($attributes)
    {
        if ($attributes->isJson())
            return $this->elequentCategoryRepository->create($attributes->all());

        return response()->json(["message" => "request is not json"], 401);

    }

    public function edit($attributes, $category)
    {
        return $this->elequentCategoryRepository->edit($attributes, $category);
    }

    public function destroy($category)
    {
        $status = $this->elequentCategoryRepository->destroy($category);
        if ($status)
            return response()->json(["status" => "successfully", "message" => "deleted"], 200);
    }

    public function show($category)
    {
        return $this->elequentCategoryRepository->show($category);
    }

}