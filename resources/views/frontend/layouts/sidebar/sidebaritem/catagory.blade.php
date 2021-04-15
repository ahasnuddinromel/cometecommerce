@php
    $catagory = App\Models\ProductCatagory::all()
@endphp
<div class="widget">
    <h6 class="upper">Categories</h6>
    <ul class="nav">
@foreach ($catagory as $cata)
    <li><a  href="{{ route('fashion.page', $cata-> id ) }}">{{ $cata-> catagory_name }}</a> </li>
@endforeach   
     
    </ul>
  </div>

 

@php
  $brand = App\Models\Brand::all()
@endphp
<div class="widget">
  <h6 class="upper">Brand</h6>
  <ul class="nav">
@foreach ($brand as $bra)
  <li><a  href="{{ route('branding.page', $bra-> id )}}">{{ $bra-> brand_name }}</a> </li>
@endforeach 
  </ul>
</div>
  <!-- end of widget        -->
