<?php

namespace Domain\Services\App;

use Infrastructure\Repositories\App\ElequentCartItemRepository;

class CartItemService
{

    public function __construct(public ElequentCartItemRepository $elequentCartItemRepository){}

    public function create($attributes)
    {

        $result = $this->elequentCartItemRepository->create($attributes);

        return response()->json([
            "message" => "success",
            "data" => $result
        ]);

    }

    public function index()
    {
        return $this->elequentCartItemRepository->all();
    }

    public function destroy($cartItem)
    {
        return $this->elequentCartItemRepository->destroy($cartItem);
    }

}