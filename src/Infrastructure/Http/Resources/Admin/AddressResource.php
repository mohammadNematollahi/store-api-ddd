<?php

namespace Infrastructure\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Infrastructure\Http\Resources\Admin\CityResource;
use Infrastructure\Http\Resources\Admin\UserResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "address" => $this->address,
            "city" => new CityResource($this->whenLoaded("city")),
            "authore" => new UserResource($this->whenLoaded("authore"))
        ];
    }
}
