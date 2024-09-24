<?php

namespace Domain\Entities\CartItem;

use Domain\Entities\Product\Product;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ["user_id" , "product_id"];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
