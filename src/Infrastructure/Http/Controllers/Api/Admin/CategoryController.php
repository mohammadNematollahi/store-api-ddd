<?php

namespace Infrastructure\Http\Controllers\Api\Admin;

use Domain\Entities\Category\Category;
use Domain\Services\Admin\CategoryService;
use Infrastructure\Http\Controllers\Controller;
use Infrastructure\Http\Requests\Api\Admin\CategoryRequest;

class CategoryController extends Controller
{
    public function __construct(public CategoryService $categoryService){

    }

    public function index()
    {
        return $this->categoryService->all();
    }

    public function create(CategoryRequest $request)
    {
        return $this->categoryService->create($request);
    }

    public function edit(CategoryRequest $request, Category $category)
    {
        return $this->categoryService->edit($request->all(), $category);
    }

    public function destroy(Category $category)
    {
        return $this->categoryService->destroy($category);
    }
    public function show(Category $category)
    {
        return $this->categoryService->show($category);
    }
}