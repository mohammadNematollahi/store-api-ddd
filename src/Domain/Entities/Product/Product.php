<?php

namespace Domain\Entities\Product;

use Domain\Entities\Brand\Brand;
use Domain\Entities\Category\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', "price", "marketable", "brand_id", "categroy_id"];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class , "categroy_id" , "id");
    }
}
