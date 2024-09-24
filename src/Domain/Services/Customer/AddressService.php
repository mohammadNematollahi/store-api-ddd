<?php

namespace Domain\Services\Customer;

use Infrastructure\Repositories\Customer\ElequentAddressRepository;

class AddressService
{

    public function __construct(public ElequentAddressRepository $elequentAddressRepository){}

    public function all()
    {
        return $this->elequentAddressRepository->all();    
    }

    public function create($attributes)
    {
        return $this->elequentAddressRepository->create($attributes);    
    }

    public function edit($attributes , $address)
    {
        return $this->elequentAddressRepository->edit($attributes, $address);    
    }

    public function destroy($address)
    {
        return $this->elequentAddressRepository->destroy($address);    
    }

    public function show($address)
    {
        return $this->elequentAddressRepository->show($address);    
    }

}