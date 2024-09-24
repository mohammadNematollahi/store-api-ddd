<?php

namespace Domain\Repositories\Admin;


interface CityRepository
{
    public function all();
    public function create($arrtibutes);
    public function edit($arrtibutes , $city);
    public function destroy($city);
    public function show($city);
}