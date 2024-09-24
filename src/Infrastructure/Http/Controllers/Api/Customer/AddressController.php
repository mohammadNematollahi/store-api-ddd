<?php

namespace  Infrastructure\Http\Controllers\Api\Customer;

use Domain\Entities\Address\Address;
use Domain\Services\Customer\AddressService;
use Infrastructure\Http\Controllers\Controller;
use Infrastructure\Http\Requests\Api\Customer\AddressRequest;

class AddressController extends Controller
{
    public function __construct(public AddressService $addressService){}
    
    public function index()
    {
        return $this->addressService->all();
    }

    public function create(AddressRequest $request)
    {
        return $this->addressService->create($request->all());
    }

    public function edit(AddressRequest $request, Address $address)
    {
        return $this->addressService->edit($request->all(), $address);
    }

    public function destroy(Address $address)
    {
        return $this->addressService->destroy($address);
    }
    public function show(Address $address)
    {
        return $this->addressService->show($address);
    }
}