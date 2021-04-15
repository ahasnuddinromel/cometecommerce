<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\ProductInfo;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $this -> validate($request, [
            'customer_name'        => 'required',
            'product_quantity'      => 'required',           
            'address'                    => 'required',
            'phone_number'         => 'required'
        ]);

    Customer:: create([
        'customer_name'         => $request ->customer_name,
        'product_id'                => $request ->product_id,
        'sp'                            => $request ->sp,
        'product_name'          => $request ->product_name,
        'product_quantity'      => $request ->product_quantity,
        'product_size'             => $request ->product_size,
        'product_color'           => $request ->product_color,
        'address'                     => $request ->address,
        'email'                        => strtolower($request ->email),
        'phone_number'          => $request ->phone_number,
        'photo'                       =>  $request ->photo
      ]);
            return redirect()-> route('main.page') -> with('success', 'Your Order Placed Successfull');       
              
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $cart_pro = ProductInfo::find($id);
        return view('frontend.cart', [
                'cart_pro' => $cart_pro
            ]);           
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
        //
    }
}
