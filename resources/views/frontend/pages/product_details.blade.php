@extends('frontend.master')
@section('home_content')
<div class="col-sm-7">
<div class="product-information"><!--/product-information-->
<img src="images/product-details/new.jpg" class="newarrival" alt="" />
<h2>{{$products->product_name}}</h2>
<p>Web ID: 1089772</p>
<img src="{{asset($products->product_image)}}" alt="" />
<span>
<span>US $59</span>
<form action="{{route('add-to-cart')}}" method="post">
	@csrf
<label>Quantity:</label>
<input type="text"  name="qty" value="1" />
<input type="hidden"  name="product_id" value="{{$products->id}}" />
<button type="submit" class="btn btn-fefault cart">
	<i class="fa fa-shopping-cart"></i>
	Add to cart
</button>
</form>
</span>
<p><b>Availability:</b> In Stock</p>
<p><b>Condition:</b> New</p>
<p><b>Brand:</b></p>

 <h2>{{$products->product_long_description}}</h2>
</div><!--/product-information-->
</div>
</div><!--/product-details-->

<!-- 

</div>
</div>/category-tab -->
@endsection