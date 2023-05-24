<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{

    use HasFactory,SoftDeletes;

    protected $fillable = ['product_type', 'product_description'];
    // function relationToBrand(){
    //     return $this->hasOne(Brand::class, 'id', 'product_type');
    // }
}
