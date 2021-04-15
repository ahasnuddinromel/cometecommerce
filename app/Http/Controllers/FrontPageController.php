<?php

namespace App\Http\Controllers;

use App\Models\ProductInfo;
use Illuminate\Http\Request;
use App\Models\ProductCatagory;

class FrontPageController extends Controller
{
    public function homePage(){
        $product = ProductInfo::latest() -> paginate(20);        
        return view('frontend.product', [
            'pro' =>  $product
        ]);
    }

    public function SingleProduct($id){
        $single_pro = ProductInfo::find($id);
        return view('frontend.single',[
            'single_pro' => $single_pro
        ]);
      }
         
}
