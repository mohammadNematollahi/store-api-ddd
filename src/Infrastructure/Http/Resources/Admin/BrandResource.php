<?php

namespace Infrastructure\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "persian_name" => $this->persian_name,
            "orginal_name" => $this->orginal_name
        ];
    }
}
