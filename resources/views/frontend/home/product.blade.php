@extends('frontend.master')
@section('content')

     @if ($category_id) 
  
	  <div class="page-head">
		<div class="container">
			<h3>{{$category_id->category_name}}</h3>
		</div>
	 </div>
       <div class="product-easy">
	     <div class="container">   
    
	@else
	<p>No products in this category</p>
	@endif

	@if (count($products) > 0 ) 

		@foreach ($products as $product)
	      <div class="col-md-3 product-men">
							 
							<div class="men-pro-item simpleCart_shelfItem" style="margin-bottom: 19px;">
								<div class="men-thumb-item">
									<img src="/images/{{$product->image}}"  style="height: 200px;  
									   alt="" class="pro-image-front" >
									<img src="/images/{{$product->image}}"  style="height: 230px; alt="" class="pro-image-back" >
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ route('product.show',$product->slug) }}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="{{ route('product.show',$product->slug) }}">{{$product->name}}</a></h4>
									<div class="info-product-price">
										<span class="item_price">${{$product->price}}</span>
										<del>$69.71</del>
									</div>

								<form action="{{url('cart')}}" method="post">
								  <input type="hidden" name="_token" value="{{ csrf_token() }}">
								  <input type="hidden" value="{{$product->qty}}" name="qty">
								  <input type="hidden" value="{{$product->name}}" name="name">
								  <input type="hidden" value="{{$product->image}}" name="image">
								  <input type="hidden" value="{{$product->id}}" name="id">
								  <input type="hidden" value="{{$product->price}}" name="price">
								  <button class="item_add single-item hvr-outline-out button2"  type="submit"  ><span class="buy-ebook__button-label" style="color: white; ">Add to cart</span></button>
								</form>
																		
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>
			@else
			<h1>No product </h1>
			@endif
			@endsection