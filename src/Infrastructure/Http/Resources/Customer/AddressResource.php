<?php

namespace Infrastructure\Http\Resources\Customer;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            "address" => $this->address,
            "city" => new CityResource($this->whenLoaded("city")),
            "authore" => new UserResource($this->whenLoaded("authore"))
        ];
    }
}
