<?php

namespace Domain\Repositories\Admin;

interface CategoryRepository
{
    public function all();
    public function create($arrtibutes);
    public function edit($arrtibutes , $category);
    public function destroy($category);
    public function show($category);
}