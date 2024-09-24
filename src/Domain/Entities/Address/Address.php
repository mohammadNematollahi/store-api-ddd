<?php

namespace Domain\Entities\Address;

use Domain\Entities\City\City;
use Domain\Entities\User\User;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ["address" , "city_id" , "user_id"];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    
    public function authore()
    {
        return $this->belongsTo(User::class , "user_id" , "id");
    }
}
