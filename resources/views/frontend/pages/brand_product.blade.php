@extends('frontend.master')
@section('home_content')

<div class="features_items">
	<h2 class="title text-center">Brand item</h2>
	
	<div class="col-sm-4">
		@foreach($products as $V_products)
		<div class="product-image-wrapper">
			
			<div class="single-products">
					<div class="productinfo text-center">
						<img src="{{asset($V_products->product_image)}}" width="100" height="150" alt="" />
						<h2>$56</h2>
						<p>{{$V_products->product_short_description}}</p>
						<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>$56</h2>
							<p></p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
					</div>
			</div>
			
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
					<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
				</ul>
			</div>
		
		</div>
			@endforeach
	</div>


	
</div><!--features_items--> -->
@endsection