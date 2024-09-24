<?php

namespace Infrastructure\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Infrastructure\Http\Resources\Admin\UserResource;

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
