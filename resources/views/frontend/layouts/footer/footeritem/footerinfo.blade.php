<div class="col-md-6 ov-h">
    <div class="row">
      <div class="col-sm-4">
        <div class="widget">
          <h6 class="upper">About 64 District & World Collection</h6>
          <p>
            <span>Ground Floor</span>
            <span>398, Isswar Boshu Road, Barishal, Bangladesh</span>
            <span>info@64dwc.com</span>         
        </div>
      </div>

@php
    $catagory = App\Models\ProductCatagory::all()
@endphp

      <div class="col-sm-4">
        <div class="widget">
          <h6 class="upper">Product Catagory</h6>
          <ul class="list-unstyled">
            @foreach ($catagory as $cata)
              <li>
                <a href="{{ route('fashion.page', $cata-> id ) }}">{{ $cata-> catagory_name }}</a>
              </li>
           @endforeach  
          </ul>
        </div>
      </div>


@php
  $brand = App\Models\Brand::all()
@endphp


 
      <div class="col-sm-4">
        <div class="widget">
          <h6 class="upper">Brands</h6>
          <ul class="list-unstyled">
            @foreach ($brand as $bra)
                <li>
                  <a href="{{ route('branding.page', $bra-> id )}}">{{ $bra-> brand_name }}</a>
                </li>
            @endforeach   
          </ul>
        </div>
      </div>
    </div>
  </div>
