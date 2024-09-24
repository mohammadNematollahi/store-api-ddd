<?php

namespace Domain\Entities\Order;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ["price" , "user_id" , "product_id" , "order_id"];
}
