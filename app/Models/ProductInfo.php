<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductInfo extends Model
{
    use HasFactory;
    protected $guarded = [];

    //public function productcatagory(){
    //    return $this -> belongsTo('App\Models\ProductCatagory');
    //}

    //public function subcatagory(){
    //    return $this -> belongsTo('App\Models\SubCatagory');
    //}
    //public function brand(){
    //    return $this -> belongsTo('App\Models\Brand');
    //}
}
