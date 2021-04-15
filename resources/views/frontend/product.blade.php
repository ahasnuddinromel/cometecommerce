@extends('frontend.layouts.app')

@section('main-content')

@include('frontend.home.slider')

<section>
    <div class="container">
        <div class="row">

        @include('frontend.layouts.sidebar.productsidebar')

        <div class="col-md-9">
            @include('frontend.products.productheader')
       
                 <div class="container-fluid">
                   <div class="row">
             @foreach ($pro as $info)
               <div class="col-md-3 col-sm-6">
                 <div class="shop-product">
                   <div class="product-thumb">
                     <a href="{{ route('single.page', $info->id) }}">
                       <img src="{{ URL::to('frontend/assets/images/product') .'/'. $info -> photo }}" alt="">
                     </a>
                     <div class="product-overlay"><a href="{{ route('single.page', $info->id) }}" class="btn btn-color-out btn-sm">View Single<i class="ti-bag"></i></a>
                     </div>
                   </div>
                   <div class="product-info">
                     <h4 class="upper"><a href="#">{{ $info-> pname }}</a></h4><span>BDT-{{ $info -> sp }}</span>
                     <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                     </div>
                   </div>
                 </div>
               </div> 
               @endforeach
               </div>              
                   <!-- end of row-->           
                 </div>
               </div>

    </div>
</div>
<!-- end of container-->
</section>
@endsection
