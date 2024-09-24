<?php

namespace Infrastructure\Http\Controllers\Api\Admin;

use Domain\Entities\Product\Product;
use Domain\Services\Admin\ProductService;
use Infrastructure\Http\Controllers\Controller;
use Infrastructure\Http\Requests\Api\Admin\ProductRequest;

class ProductController extends Controller
{
    public function __construct(public ProductService $productService){}
    public function index()
    {
        return $this->productService->all();
    }

    public function create(ProductRequest $request)
    {
        return $this->productService->create($request);
    }

    public function edit(ProductRequest $request, Product $product)
    {
        return $this->productService->edit($request->all(), $product);
    }

    public function destroy(Product $product)
    {
        return $this->productService->destroy($product);
    }
    public function show(Product $product)
    {
        return $this->productService->show($product);
    }
}