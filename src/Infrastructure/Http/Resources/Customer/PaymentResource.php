<?php

namespace Infrastructure\Http\Resources\Customer;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            "customre" => new UserResource($this->whenLoaded("user")),
            "status" => $this->status,
            "price" => $this->price ,
            "created_at" => $this->created_at
        ];
    }
}
