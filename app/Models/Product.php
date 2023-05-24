<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    // protected $fillable = ['product_type_id'];
    protected $fillable = ['product_name','product_price', 'product_quantity', 'product_description','product_type_id','product_brand_id'];

    //brand
    public function relationToBrand(){
        return $this->hasOne(Brand::class, 'id', 'product_brand_id');
    }
    //productType
    public function relationToProductType(){
        return $this->hasOne(ProductType::class, 'id', 'product_type_id');
    }
}
