<?php

namespace Domain\Entities\Brand;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ["orginal_name" , "persian_name"];
}
