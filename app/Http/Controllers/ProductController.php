<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\ProductCatagory;
use App\Models\ProductModel;
use App\Models\SubCatagory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pro = ProductModel::latest() -> paginate(20);
     
      return view('admin.product.index', [
          'product' => $pro        
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unique_name = '';
        if($request-> hasFile('photo')){
            $img = $request ->file('photo');
            $unique_name = md5(time(). rand()).'.'. $img-> getClientOriginalExtension();
            $img -> move(public_path('/frontend/assets/images/product/'), $unique_name);
        }

        $multi_images = [];
        if( $request -> hasFile('multi_photo') ){
            foreach( $request -> file('multi_photo') as $multi_img ){
                $unique_multi_name = md5(time().rand()) .'.'. $multi_img -> getClientOriginalExtension();
                $multi_img-> move(public_path('/frontend/assets/images/product/'),  $unique_multi_name);
                array_push($multi_images,  $unique_multi_name);
            }
        }

        
        ProductModel::create([
           'pid'                                => $request -> pid,
           'pname'                           => $request -> pname,
           'product_catagorie_id'     => $request -> product_catagorie_id,
           'sub_catagorie_id'           => $request -> sub_catagorie_id,
           'brand_id'                       => $request -> brand_id,
           'quantity'                        => $request -> quantity,
           'product_size'                 => json_encode( $request -> product_size),
           'product_color'               => json_encode( $request -> product_color),
           'product_discription'       => $request -> product_discription,
           'tp'                                 => $request -> tp,
           'sp'                                 => $request -> sp,           
           'photo'                            => $unique_name,
           'multi_photo'                  => json_encode($multi_images)
       ]);
       return redirect() -> route('product.index') -> with('success', 'Product Added Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $single = ProductModel::find($id);
        return view('admin.product.edit', [
            'single' =>  $single
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $data = ProductModel::find($id);
        $unique_name = '';
        if($request ->hasFile( 'new_photo')){
            $img = $request -> file('new_photo');
            $unique_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();
            $img -> move(public_path('frontend/assets/images/product/'),  $unique_name);
            unlink(public_path('frontend/assets/images/product/' .  $data -> photo ));  
        }else{
            $unique_name = $data -> photo;
        } 
        
        $multi_images = [];
        if( $request -> hasFile('multi_photo') ){
            foreach( $request -> file('multi_photo') as $multi_img ){
                $unique_multi_name = md5(time().rand()) .'.'. $multi_img -> getClientOriginalExtension();
                foreach(  json_decode($data ->multi_photo) as $img ){
                    unlink(public_path('frontend/assets/images/product/' .   $img ));
                } 
                $multi_img-> move(public_path('/frontend/assets/images/product/'),  $unique_multi_name);
                array_push($multi_images,  $unique_multi_name);
                }
            }else{
                $multi_images = json_decode($data -> multi_photo);
            } 

        $data -> pid                                 = $request -> pid;
        $data -> pname                            = $request -> pname;
        $data -> product_catagorie_id      = $request -> product_catagorie_id;
        $data -> sub_catagorie_id            = $request -> sub_catagorie_id;
        $data -> brand_id                        = $request -> brand_id;
        $data -> quantity                         = $request -> quantity;
        $data -> product_size                  = json_encode( $request -> product_size);
        $data -> product_color                = json_encode( $request -> product_color);
        $data -> product_discription        = $request -> product_discription;
        $data -> tp                                  = $request -> tp;
        $data -> sp                                  = $request -> st;
        $data -> photo                             = $unique_name;
        $data -> multi_photo                   =  json_encode($multi_images);       
        $data -> update();
        return redirect() -> route('product.index') -> with('success', 'Product Updated Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ProductModel::find($id);
        $delete -> delete();
        unlink(public_path('frontend/assets/images/product/' .  $delete->photo )); 
        foreach(  json_decode($delete ->multi_photo) as $img ){
            unlink(public_path('frontend/assets/images/product/' .   $img ));
        } 
        return redirect() -> route('product.index') -> with('success', 'Product Deleted successful');
    }
}
