@php
    $information = App\Models\CompanyInfo::all()
@endphp
@foreach ($information as $info)
<div class="logo">
  <a href="">
    <img style="width: 70px" src="{{ URL::to('frontend/assets/images') .'/'. $info -> company_logo }}"" alt="" class="logo-light">
    <img style="width: 70px" src="{{ URL::to('frontend/assets/images') .'/'. $info -> company_logo }}" alt="" class="logo-dark">
  </a>
  <h5 class="d-inline-block">You Can Buy On us</h5>
</div>
<div class="menu-extras">
  <div class="menu-item">

  </div>
  <div class="menu-item">
    <!-- Search Form-->
    <div class="search">
      <a href="#">
        <i class="ti-search"></i>
      </a>
      <div class="search-form">
        <form action="#" class="inline-form">
          <div class="input-group">
            <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn"><button type="button" class="btn btn-color"><span><i class="ti-search"></i></span>
            </button>
            </span>
          </div>
        </form>
      </div>
    </div>
    <!-- End search form-->
  </div>
  <div class="menu-item">
    <!-- Mobile menu toggle-->
    <a class="navbar-toggle">
      <div class="lines">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </a>
    <!-- End mobile menu toggle-->
  </div>
</div>
@endforeach

