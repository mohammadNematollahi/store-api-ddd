<?php

namespace Infrastructure\Http\Controllers\Api\App;

use Domain\Services\App\HomeService;
use Infrastructure\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct(public HomeService $homeService){}
    
    public function index()
    {
        return $this->homeService->all();
    }
    
}