<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\ProductCatagory;
use App\Models\ProductInfo;
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
      $pro = ProductInfo::latest() -> paginate(20);
     
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

        
       ProductInfo::create([
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
   //
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
       
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ProductInfo::find($id);
        $delete -> delete();
        unlink(public_path('images/product/' .  $delete->photo ));  
        return redirect() -> route('product.index') -> with('success', 'Product Deleted successful');
    }
}
