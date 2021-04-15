@extends('frontend.layouts.app')

@section('main-content')



@php
    $size =  json_decode($cart_pro -> product_size);
    $color =  json_decode($cart_pro -> product_color);
@endphp	
<section>
   <div class="container">
    <h4 class="text-danger">Product Detailes And Submit Your Mailing Address</h4><hr>
      <div class="row"> 
        @include('validate')       
         <section>         
              <div class="container">
                <form method="POST" action="{{ route('customer.store') }}" enctype="multipart/form-data">
                 @csrf
                  <div class="checkout-form">
                    <div class="row">
                      <div class="col-md-12">
                      
                        <div class="form-group">
                          <label>Full Name</label>
                          <input name="customer_name" type="text" class="form-control" value="{{ old('customer_name') }}">
                        </div>                      
                        <div class="form-group">
                          <div class="col-xs-6 pl-0">
                            <label>Product Id</label>
                            <input name="product_id" type="text" class="form-control" value="{{  $cart_pro -> pid }}" readonly>
                          </div>
                          <div class="col-xs-6 pr-0">
                            <label>Price</label>
                            <input name="sp" type="text" class="form-control" value="{{  $cart_pro -> sp }}" readonly>
                          </div>
                       </div>
                       <div class="form-group">
                        <div class="col-xs-6 pl-0">
                          <label>Product Name</label>
                          <input name="product_name" type="text" class="form-control" value="{{  $cart_pro -> pname }}" readonly>
                        </div>
                        <div class="col-xs-6 pr-0">
                          <label>Product Quantity</label>
                          <input name="product_quantity" type="number" class="form-control"value="{{ old('product_quantity') }}">                                                 
                        </div>
                     </div>
                     <div class="form-group">
                      <div class="col-xs-6 pl-0">
                        <label>Product Size</label>
                        <select name="product_size" id=""  class="form-control" >
                          <option  value="">--Select Size--</option>
                          @foreach ($size as $si)
                              <option  value=" {{ $si }}"> {{ $si }}</option>
                          @endforeach
                        </select>   
                      </div>
                      <div class="col-xs-6 pr-0">                    
                        <label>Product Color</label>
                        <select name="product_color" id="" class="form-control">
                          <option value="">--Select Color--</option>
                          @foreach ($color as $col)
                            <option  value="{{ $col }}">{{ $col }}</option>
                          @endforeach
                        </select>
                      </div>
                   </div>                       
                        <div class="form-group">
                          <label>Address</label>
                          <input name="address" type="text" class="form-control"  value="{{ old('address') }}">
                        </div>
                        <div class="form-group">
                          <div class="col-xs-6 pl-0">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control" value="{{ old('email') }}">
                          </div>
                          <div class="col-xs-6 pr-0">
                            <label>Mobile</label>
                            <input name="phone_number" type="text" class="form-control" value="{{ old('phone_number') }}">
                          </div>
                        </div>                                              
                          <div class="form-group">                             
                                <div class="col-xs-6">
                                  <h5 style="color:red">(Shipping Charge: Free) </h5>                                
                                  <h5>Grand Total: {{  $cart_pro -> sp }}/= </h5>
                                  <p style="color:green">Pay On Bkash: (+88 01716 19 20 31)</p>
                                </div>           
                              <div class="col-xs-6">
                                <img style="width: 150px" src="{{ URL::to('frontend/assets/images/product') .'/'. $cart_pro -> photo }}" alt="">
                                <input style="display: none"  name="photo" type="text" value="{{ $cart_pro -> photo }}">
                              </div>                                
                          </div> 
                          <div class="form-group">
                              <div class="checkout-submit">
                               <input class="btn btn-color" type="submit" value="Order Confirm">
                              </div>
                            </div>                        
                      </div>  
                      </div>
                     
                    <!-- end of row-->
                  </div>
                </form>
              </div>
            </section>

</div>
<!-- end of container-->
</section>




@endsection
