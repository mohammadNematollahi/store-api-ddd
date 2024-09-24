<?php

namespace Domain\Entities\Payment;

use Domain\Entities\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Payment extends Model
{

    protected $fillable = ["response_bank" , "user_id" , "price" , "status" , "price"];
    protected $casts = ["response_bank" => "array"];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status() :Attribute
    {
        return Attribute::get(fn($value) => $value == 0 ? "پرداخت نشده " : "پرداخت شده");
    }
}
