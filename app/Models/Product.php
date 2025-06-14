<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
     public function categories(){
     return  $this->belongsTo(Category::class);
    }

    public function product_attr(){
        return $this->hasMany(Product_attrubutes::class);
    }
}