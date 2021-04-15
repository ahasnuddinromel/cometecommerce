@extends('frontend.layouts.app')

@section('main-content')

<section>
    <div class="container">
        <div class="row">     

        
<section>
	<div class="container">
	  <div class="single-product-details">
		<div class="row">
			@php
				$multi = json_decode($single_pro -> multi_photo);
				$size =  json_decode($single_pro -> product_size);
				$color =  json_decode($single_pro -> product_color);			
			@endphp	

		  <div class="col-md-6">
			<div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true}" class="flexslider nav-inside control-nav-dark">
			  <ul class="slides">
					@foreach (	$multi as $multi_img )
						<li>
							<img	src="{{ URL::to('frontend/assets/images/product') .'/'. $multi_img}}" alt="">
						</li>		
					@endforeach						
			  </ul>
			</div>
		  </div>

		  <div class="col-md-5 col-md-offset-1">
			<div class="title mt-0">
			  <h2>{{   $single_pro -> pname}}<span class="red-dot"></span></h2>
			  <p style="color: red">Shipping Charge Free</p>			 		 
			</div>
			<div class="single-product-price">
			  <div class="row">
				<div class="col-xs-6">
				  <h4><span style="color: red">Price: BDT - {{ $single_pro -> sp}}</span></h4>
				</div>
				<div class="col-xs-6 text-right">
						<span class="rating-stars">
							<i class="ti-star full"></i>
							<i class="ti-star full"></i>
							<i class="ti-star full"></i>
							<i class="ti-star full"></i>
							<i class="ti-star"></i>
						<span class="hidden-xs">(3 Reviews)						 
						</span>
					</span>
				</div>
			  </div>
			</div>
			<div class="single-product-desc">
			  <p>{!! htmlspecialchars_decode($single_pro -> product_discription)!!}</p>
			</div>
			<div class="single-product-add">
			  <form action="#" class="inline-form">
				<div class="input-group">
					<a href="{{ route('customer.show', $single_pro -> id) }}"><button type="button" class="btn btn-color">Submit Order<i class="ti-bag"></i></button></a>
				</div>
			  </form>
			</div>
			<div class="single-product-list">
			  <ul>
				<li><span>Available Sizes:</span>
					@foreach ($size as $si)
						{{ $si }}-
					@endforeach
			</li>
				<li><span>Available Colors:</span>
					@foreach ($color as $col)
						{{ $col }}-
					@endforeach</li>
				 </ul>
			</div>
		  </div>
		</div>
		<!-- end of row-->
	  </div>
	  <div class="product-tabs">
		<ul role="tablist" class="nav nav-tabs">		  
		  <li role="presentation" class="active"><a href="#second-tab" role="tab" data-toggle="tab">Sizes</a>
		  </li>
		  <li role="presentation"><a href="#third-tab" role="tab" data-toggle="tab">Product Detles</a>
		  </li>
		</ul>
		<div class="tab-content">	
		  <div id="second-tab" role="tabpanel" class="tab-pane active">
			<table class="table table-bordered table-striped">
			  <thead>
				<tr>
				  <th class="upper">Size</th>
				  <th class="upper">Chest (Inch)</th>
				  <th class="upper">Waist (Inch)</th>
				  <th class="upper">Hips (Inch)</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>XXL</td>
				  <td>42</td>
				  <td>40</td>
				  <td>42</td>
				</tr>
				<tr>
				  <td>XL</td>
				  <td>40</td>
				  <td>38</td>
				  <td>40</td>
				</tr>
				<tr>
					<td>L</td>
					<td>38</td>
					<td>36</td>
					<td>38</td>
				  </tr>
				<tr>
				  <td>M</td>
				  <td>40</td>
				  <td>32</td>
		  		  <td>34</td>
				</tr>
				<tr>
					<td>S</td>
					<td>32</td>
					<td>30</td>
					<td>32</td>
				  </tr>
			  </tbody>
			</table>
		  </div>
		  <div id="third-tab" role="tabpanel" class="tab-pane">
			<div id="comments">
			  <ul class="comments-list">
				<li class="rating">
				  <span class="comment-date">{{ date('d F, Y', strtotime($single_pro -> created_at) ) }}</span>
				 <p>{!! htmlspecialchars_decode($single_pro -> product_discription)!!}</p>
				</li>			
			  </ul>
			</div>
	
		  </div>
		</div>
	  </div>


	  
	</div>
  </section>


    </div>
</div>
<!-- end of container-->
</section>
@endsection
