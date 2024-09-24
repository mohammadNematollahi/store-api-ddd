<?php

namespace Domain\Repositories\Customer;

interface AddressRepository
{
    public function all();
    public function show($address);
    public function create($attributes);
    public function edit($attributes , $address);
}