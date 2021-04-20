@php
    $trand = App\Models\ProductModel::latest()->limit(3)->get()
@endphp

<div class="widget">
    <h6 class="upper">Trending Products</h6>
    <ul class="nav product-list">
     

      @foreach ($trand as $item)
      <li>
        <div class="product-thumbnail">
          <img src="{{ URL::to('frontend/assets/images/product') .'/'. $item -> photo }}" alt="">
        </div>
        <div class="product-summary"><a href="{{ route('single.page', $item->id) }}">{{ $item -> pname }}</a><span>{{ $item -> sp }}</span>
        </div>
      </li>  
      @endforeach 
    </ul>
  </div>
  <!-- end of widget          -->
