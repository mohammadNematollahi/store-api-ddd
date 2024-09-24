<?php

namespace Infrastructure\Repositories\Admin;

use Domain\Entities\Category\Category;
use Domain\Repositories\Admin\CategoryRepository;
use Infrastructure\Http\Resources\Admin\CategoryResource;

class ElequentCategoryRepository implements CategoryRepository
{
    public function all()
    {
        return CategoryResource::collection(Category::all());    
    }

    public function create($attributes)
    {
        return Category::create($attributes);
    }

    public function edit($attributes , $category)
    {
        return $category->update($attributes);
    }

    public function destroy($category)
    {
        return $category->delete();
    }

    public function show($category)
    {
        return new CategoryResource($category);
    }
}