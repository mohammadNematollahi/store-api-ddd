<?php

namespace Domain\Entities\Province;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = ["name"];
    protected $table = "province";
}
