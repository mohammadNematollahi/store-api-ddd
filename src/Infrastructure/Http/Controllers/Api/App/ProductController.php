<?php

namespace Infrastructure\Http\Controllers\Api\App;

use Domain\Entities\Product\Product;
use Domain\Services\App\ProductService;
use Infrastructure\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct(public ProductService $productService){}
    
    public function show(Product $product)
    {
        return $this->productService->show($product);
    }
}