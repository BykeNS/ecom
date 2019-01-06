@extends('frontend.master')
@section('content')

<div class="page-head">
	<div class="container">
	<h1 style="text-align: center; color: #FFC300;">SEARCH PAGE</h1>
</div>
</div>


@if (!empty($query) &&  count($products) > 0)
  <div class="text-center" style="margin: 31px;">
	<h3>Search results for '{{request()->input('query')}}'</h3> 
     <h4 >Total {{count($products)}}</h4>
	</div>
				

<div class="container">
	@foreach ($products as $product)
	<div class="col-md-3 product-men">
							 
							<div class="men-pro-item simpleCart_shelfItem" style="margin-bottom: 31px;">
								<div class="men-thumb-item">
									<img src="/images/{{$product->image}}" style="height: 200px;" alt="" class="pro-image-front" >
									<img src="/images/{{$product->image}}" alt="" class="pro-image-back" >
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
									<a href="{{ route('product.show',$product->slug) }}" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
       @endforeach
		</div>
	</div>
@else
<div class="text-center">
 <h2 style="margin: 31px;">No results for '{{request()->input('query')}}' </h2>
</div>

@endif
@endsection