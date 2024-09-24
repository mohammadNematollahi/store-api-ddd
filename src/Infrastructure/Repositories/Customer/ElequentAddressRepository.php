<?php

namespace Infrastructure\Repositories\Customer;

use Domain\Entities\Address\Address;
use Domain\Repositories\Customer\AddressRepository;
use Illuminate\Support\Facades\Auth;
use Infrastructure\Http\Resources\Customer\AddressResource;

class ElequentAddressRepository implements AddressRepository
{
    public function all()
    {
        return AddressResource::collection(Address::where("user_id" , auth()->user()->id)->get()->loadMissing("city.province"));    
    }

    public function create($attributes)
    {
        return Address::create($attributes);
    }

    public function edit($attributes , $address)
    {
        return $address->update($attributes);
    }

    public function destroy($address)
    {
        return $address->delete();
    }

    public function show($address)
    {
        return new AddressResource($address);
    }
}