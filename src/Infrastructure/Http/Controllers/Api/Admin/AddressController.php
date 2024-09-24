<?php

namespace Infrastructure\Http\Controllers\Api\Admin;

use Domain\Entities\Address\Address;
use Domain\Services\Admin\AddressService;
use Infrastructure\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function __construct(public AddressService $addressService){}
    
    public function index()
    {
        return $this->addressService->all();
    }

    public function show(Address $address)
    {
        return $this->addressService->show($address);
    }
}