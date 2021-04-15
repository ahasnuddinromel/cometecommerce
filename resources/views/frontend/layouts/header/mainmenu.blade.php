<div id="navigation">
    <!-- Navigation Menu-->
    <ul class="navigation-menu">  
      
     
      <li class="has-submenu">
        <a href="{{ route('main.page') }}">HOME</a>
        <ul class="submenu megamenu">
          <li>
            <ul>
              <li>
                <span>About Company</span>
              </li>
              <li>
                <a href="#"><i class="ti-layout-accordion-merged"></i>Abour Us</a>
              </li>
              <li>
                <a href="#"><i class="ti-comment-alt"></i>Our Team</a>
              </li>              
              <li>
                <a href="#"><i class="ti-control-play"></i>Contact Us</a>
              </li>
            </ul>
          </li>
          <li>
            <ul>
              <li>
                <span>About Product</span>
              </li>
              <li>
                <a href="#"><i class="ti-image"></i>Post </a>
              </li>
              <li>
                <a href="#"><i class="ti-volume"></i>What's New</a>
              </li>
              <li>
                <a href="#"><i class="ti-uppercase"></i>New Arrival</a>
              </li>
              <li>
                <a href="#"><i class="ti-align-left"></i>Delevary</a>
              </li>             
            </ul>
          </li>
        </ul>
      </li>



        @php
            $catagory = App\Models\ProductCatagory::all()    
        @endphp  
      <li class="has-submenu">
        <a href="#">Catagory</a>
        <ul class="submenu">
          @foreach ($catagory as $cata)
          <li class="has-submenu">
            <a  href="{{ route('fashion.page', $cata-> id ) }}">{{ $cata-> catagory_name }}</a>
             <ul class="submenu">
                @php             
                  $sub_cata =  App\Models\SubCatagory::where('product_catagorie_id', $cata-> id )->get()
               @endphp
              @foreach ($sub_cata as $sub)
              <li>
                <a href="{{ route('subcata.page', $sub-> id ) }}">{{ $sub-> sub_catagory_name }}</a>
              </li>
              @endforeach 
            </ul>
          </li>
          @endforeach   
          
        </ul>
      </li>

      @php
           $brand = App\Models\Brand::all()    
      @endphp  


      <li class="has-submenu">
        <a href="#">Brand</a>
        <ul class="submenu">
              @foreach ($brand as $bra)
              <li class="has-submenu">
                <a href="{{ route('branding.page', $bra-> id ) }}">{{ $bra-> brand_name }}</a>
                {{--<ul class="submenu">
                  
                  <li>
                    <a href="blog.html">No Sidebar</a>
                  </li>
                  
                </ul>--}}
              </li>
              @endforeach 
        </ul>
      </li>


      <li class="has-submenu">
        <a href="{{ route('admin.login') }}">Admin Login</a>
      </li>

      


    </ul>
    <!-- End navigation menu        -->
  </div>
