<?php

namespace Domain\Repositories\Admin;


interface ProductRepostitory
{
    public function all();
    public function create($arrtibutes);
    public function edit($arrtibutes , $product);
    public function destroy($product);
    public function show($product);
}