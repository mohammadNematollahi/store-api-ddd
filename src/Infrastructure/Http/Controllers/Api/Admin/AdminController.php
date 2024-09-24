<?php

namespace Infrastructure\Http\Controllers\Api\Admin;

use Infrastructure\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __invoke()
    {
        return response()->json("hello this is page admin");
    }
}