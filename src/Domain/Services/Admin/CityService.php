<?php

namespace Domain\Services\Admin;

use Infrastructure\Repositories\Admin\ElequentCityRepository;

class CityService
{

    public function __construct(public ElequentCityRepository $elequentCityRepository){}

        public function all()
        {
            return $this->elequentCityRepository->all();
        }
    
        public function create($attributes)
        {
            if ($attributes->isJson())
                return $this->elequentCityRepository->create($attributes->all());
    
            return response()->json(["message" => "request is not json"], 401);
    
        }
    
        public function edit($attributes, $city)
        {
            return $this->elequentCityRepository->edit($attributes, $city);
        }
    
        public function destroy($city)
        {
            $status = $this->elequentCityRepository->destroy($city);
            if ($status)
                return response()->json(["status" => "successfully", "message" => "deleted"], 200);
        }
    
        public function show($city)
        {
            return $this->elequentCityRepository->show($city);
        }

}