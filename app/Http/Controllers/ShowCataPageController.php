<?php

namespace App\Http\Controllers;


use App\Models\ProductModel;
use Illuminate\Http\Request;

class ShowCataPageController extends Controller
{
    public function FashionPage($id){
        $product = ProductModel::where('product_catagorie_id', $id)->latest()->paginate(20);             
        return view('frontend.products.catagorypage.fashion', [
            'pro' => $product
        ]);
    }

    public function BrandPage($id){
        $product = ProductModel::where('brand_id', $id)->latest()->paginate(20);             
        return view('frontend.products.catagorypage.brand', [
            'pro' => $product
        ]);
    }

    public function  SubCataPage($id){
        $product = ProductModel::where('sub_catagorie_id', $id)->latest()->paginate(20);             
        return view('frontend.products.catagorypage.subcata', [
            'pro' => $product
        ]);
    }

   
}
