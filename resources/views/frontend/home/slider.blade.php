@php
    $slider = App\Models\Slider::latest()-> get();
@endphp


<section id="home">
<div id="home-slider" class="flexslider">
    <ul class="slides">
      @foreach ($slider as $slide)
      <li>
        <img src="{{ URL::to('frontend/assets/images/slider/') .'/'. $slide -> slider_image }}" alt="">       
      </li>
      @endforeach      
    </ul>
  </div>
  <!-- End Home Slider-->
</section>
