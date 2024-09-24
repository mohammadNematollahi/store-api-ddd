<?php

namespace Infrastructure\Http\Resources\Customer;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "status" => $this->status,
            "final_price" => $this->final_price,
            "customer" => new UserResource($this->whenLoaded("user")),
            "payment" => new PaymentResource($this->whenLoaded("payment"))
        ];
    }
}
