<?php

namespace Infrastructure\Http\Resources\Admin;

use Illuminate\Http\Request;
use Domain\Entities\Brand\Brand;
use Illuminate\Http\Resources\Json\JsonResource;
use Infrastructure\Http\Resources\Admin\BrandResource;
use Infrastructure\Http\Resources\Admin\CategoryResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "name" => $this->name,
            "price" => $this->price,
            "brand" => new BrandResource($this->whenLoaded("brand")),
            "category" => new CategoryResource($this->whenLoaded("category"))
        ];
    }
}
