<?php

namespace Domain\Services\Admin;

use Domain\Entities\Address\Address;
use Infrastructure\Repositories\Admin\ElequentAddressRepository;

class AddressService
{

    public function __construct(public ElequentAddressRepository $elequentAddressRepository){}

    public function all()
    {
        return $this->elequentAddressRepository->all();
    }

    public function show(Address $address)
    {
        return $this->elequentAddressRepository->show($address);
    }

}