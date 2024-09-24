<?php

namespace Domain\Entities\Order;

use Domain\Entities\Payment\Payment;
use Domain\Entities\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Order extends Model
{
    protected $fillable = ["final_price" , "user_id" , "payment_id" , "status"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function status() :Attribute
    {
        return Attribute::get(fn($value)=> $value == 0 ? "پرداخت نشده" : "پرداخت شده");
    }
}
