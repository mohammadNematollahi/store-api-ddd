<?php

namespace Infrastructure\Repositories\Admin;

use Domain\Entities\Address\Address;
use Domain\Repositories\Admin\AddressRepository;
use Infrastructure\Http\Resources\Admin\AddressResource;

class ElequentAddressRepository implements AddressRepository
{
    public function all()
    {
        return AddressResource::collection(Address::all()->load(["authore" , "city"]));
    }
    public function show($address)
    {
        return new AddressResource(Address::all()->load(["authore" , "city"]));
    }
}