<?php

namespace Infrastructure\Http\Controllers\Api\App;

use Domain\Entities\Product\Product;
use Domain\Services\App\CartItemService;
use Infrastructure\Http\Controllers\Controller;

class  CartItemController extends Controller
{
    public function __construct(public CartItemService $cartItemService){}

    public function addToCart(Product $product)
    {

        $user = auth()->user();
        $inputs = [
            "user_id" => $user->id ,
            "product_id" => $product->id
        ];

        return $this->cartItemService->create($inputs);

    }

    public function index()
    {
        return $this->cartItemService->index();
    }

    public function destroy($cartItem)
    {
        return $this->cartItemService->destroy($cartItem);
    }

}