<?php

namespace Domain\Repositories\App;

interface CartItemRepository
{
    public function all();
    public function create($attributes);
    public function destroy($cartItem);
}