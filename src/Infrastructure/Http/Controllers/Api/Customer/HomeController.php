<?php

namespace Infrastructure\Http\Controllers\Api\Customer;

use Infrastructure\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return response()->json("hello this is user panel" , 200);
    }
}