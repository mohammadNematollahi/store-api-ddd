<?php

namespace Infrastructure\Repositories\App;

use Domain\Entities\CartItem\CartItem;
use Domain\Repositories\App\CartItemRepository;
use Infrastructure\Http\Resources\Customer\CartItemResource;

class ElequentCartItemRepository implements CartItemRepository
{
    public function create($attributes)
    {
        return CartItem::create($attributes);
    }

    public function all()
    {
        $user = auth()->user();
        return CartItemResource::collection(CartItem::where("user_id" , $user->id)->latest()->get()->load("product"));
    }

    public function destroy($cartItem)
    {
        return $cartItem->delete();
    }

}