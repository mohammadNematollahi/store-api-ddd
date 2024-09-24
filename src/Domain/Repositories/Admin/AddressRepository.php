<?php

namespace Domain\Repositories\Admin;


interface AddressRepository
{
    public function all();
    public function show($address);
}