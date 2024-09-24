<?php

namespace Domain\Repositories\Admin;


interface ProvinceRepository
{
    public function all();
    public function create($arrtibutes);
    public function edit($arrtibutes , $province);
    public function destroy($province);
    public function show($province);
}