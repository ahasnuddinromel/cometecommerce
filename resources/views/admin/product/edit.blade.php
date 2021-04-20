@extends('admin.layouts.app')

@section('main-content')
  <!-- Main Wrapper -->
  <div class="main-wrapper">

    @include('admin.layouts.section.headertop')   


	<!-- Page Wrapper -->  

    <div class="card-body">
        <form action="{{ route('product.update', $single -> id ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                @include('validate')
                <div class="col-xl-12">
                    <h4 class="card-title text-primary">Add New Product</h4>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Product Id</label>
                        <div class="col-lg-9">
                            <input name="pid" type="text" class="form-control" value="{{ $single -> pid}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Product Name</label>
                        <div class="col-lg-9">
                            <input name="pname" type="text" class="form-control" value="{{ $single -> pname}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        @php
                            $catagory = App\Models\ProductCatagory::all();
                        @endphp      
                        <label class="col-lg-3 col-form-label">Catagory</label>
                        <div class="col-lg-9">
                            <select name="product_catagorie_id" class="form-control">
                                <option>Select</option>
                                @foreach ($catagory as $cata)
                                     <option value="{{ $cata->id }}">{{ $cata->catagory_name }}</option>          
                                @endforeach           
                            </select>
                        </div>
                    </div>                 
                    <div class="form-group row">
                        @php
                            $sub_cata = App\Models\SubCatagory::all();
                        @endphp      
                        <label class="col-lg-3 col-form-label">Sub Catagory</label>
                        <div class="col-lg-9">
                            <select name="sub_catagorie_id" class="form-control">
                                <option>Select</option>
                                @foreach ($sub_cata as $sub)
                                <option value="{{ $sub->id }}">{{ $sub->sub_catagory_name }}</option>          
                                @endforeach                                     
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        @php
                               $brand = App\Models\Brand::all();
                        @endphp       
                        <label class="col-lg-3 col-form-label">Brand Name</label>
                        <div class="col-lg-9">
                            <select name="brand_id" class="form-control">
                                <option>Select</option>
                                @foreach ($brand as $bra)
                                    <option value="{{ $bra->id}}">{{ $bra->brand_name }}</option>          
                                @endforeach                           
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Quantity</label>
                        <div class="col-lg-9">
                            <input name="quantity" type="text" class="form-control" value="{{ $single -> quantity}}">
                        </div>
                    </div>
                    <div class="form-group row">                            
                        <label class="col-lg-3 col-form-label">Size</label>
                        <div class="col-lg-9">
                            <select id="select_size" name="product_size[]" class="form-control" multiple="multiple" >
                                    <option value="S">S</option>          
                                    <option value="M">M</option>          
                                    <option value="L">L</option>          
                                    <option value="XL">XL</option>          
                                    <option value="XXL">XXL</option>          
                               </select>
                        </div>
                    </div>
                    <div class="form-group row">                            
                        <label class="col-lg-3 col-form-label">Color</label>
                        <div class="col-lg-9">
                            <select id="select_color" name="product_color[]" class="form-control" multiple="multiple">
                                    <option value="White">White</option>          
                                    <option value="Red">Red</option>          
                                    <option value="Black">Black</option>          
                                    <option value="Yellow">Yellow</option>          
                                    <option value="Blue">Blue</option>          
                                    <option value="Merun">Merun</option>          
                               </select>
                        </div>
                    </div>                                  
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Product Discription</label>
                        <div class="col-lg-9">
                            <textarea id="discription_editor" name="product_discription" value="{{ $single -> product_discription}}" ></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Tread Price</label>
                        <div class="col-lg-9">
                            <input name="tp" type="text" class="form-control" value="{{ $single -> tp}}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Sell Price</label>
                        <div class="col-lg-9">
                            <input name="sp" type="text" class="form-control"value="{{ $single -> sp}}" >
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Single Image</label>
                        <div class="col-lg-9">
                            <img style="width: 150px" id="edit_product_img_load" src="" alt="">
                            {{--<img style="width: 150px" src="{{ URL::to('frontend/assets/images/product/', $single -> photo)}}" alt="">--}}
                            <label for="edit_product_img_select"><img style="width:100px; cursor:pointer;" src="{{ URL::to('frontend/assets/images/single.png') }}" alt=""></label>
                            <input style="display:none" id="edit_product_img_select" name="new_photo" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Multi Images</label>
                        <div class="col-lg-9">
                           
                            <div class="edit-post-multi-imges"> </div>
                            {{--@foreach (json_decode($single -> multi_photo) as $item)
                                    <img style="width: 150px" src="{{ URL::to('frontend/assets/images/product/', $item)}}" alt="">
                            @endforeach --}}
                            <br>                           
                            <label for="edit_multi_img_select"><img style="width:100px; cursor:pointer;" src="{{ URL::to('frontend/assets/images/multipal.png') }}" alt=""></label>                          
                            <input style="display:none" name="new_multi_photo[]" type="file"  id="edit_multi_img_select" class="form-control" multiple>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>


    <!-- /Add Product Modal -->
@endsection
