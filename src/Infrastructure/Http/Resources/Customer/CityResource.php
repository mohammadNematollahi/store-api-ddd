<?php

namespace Infrastructure\Http\Resources\Customer;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "province" => new ProvinceResource($this->whenLoaded("province")),
            "name"=> $this->name,
        ];
    }
}
