@extends('frontend.master')
@section('content')

<div class="page-head">
	
</div>
<div class="single">

 <div class="container">
 	<div class="col-sm-1-12|auto">
 	  	@include('includes.message')
 	</div>
		
	

		
        
		<div class="col-md-6 " >

			<div class="">
				<div class="">
					
					<ul style="list-style: none;">
						
						<li>
							<div class=""> <img src="{{asset('images/'.$products->image)}}"  class="img-responsive"> </div>
						</li>	
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-6  ">
				
					<h3>{{$products->name}}</h3>
					<p><span class="item_price">${{$products->price}}</span> <del>- $900</del></p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="description">
						<h4>{{$products->description}}</h4>
						
					</div>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Qty:</h5>
							<td class="invert">
							 <div class="quantity"> 
								 
								<input type="hidden" name="abc_total" id="abc_total" value="{{$products->qty}}" />  
								 <select  id="price" >
							        <option value="250">1</option>
							        <option value="300">2</option>
							        <option value="350">3</option>
							        <option value="400">4</option>
							    </select> 
							</div>
						</td>
						</div>
                             <!--quantity-->
									<script>
									$(document).ready(function(){
									    $('.quantity-select').change(function(){
									        var abc_total = parseInt($('#abc_total').val());
									        var selected_price = parseInt($(this).val());
									        var total = (abc_total+selected_price);
									        });
									    });
									
									</script>
								<!--quantity-->

					</div>
					
						<div class="clearfix"> </div>
					
					<div class="occasion-cart" style="margin-top: 41px;">
						<form action="{{url('cart')}}" method="post">
								  <input type="hidden" name="_token" value="{{ csrf_token() }}">
								  <input type="hidden" value="1" name="qty">
								  <input type="hidden" value="{{$products->name}}" name="name">
								  <input type="hidden" value="{{$products->image}}" name="image">
								  <input type="hidden" value="{{$products->id}}" name="id">
								  <input type="hidden" value="{{$products->price}}" name="price">
								  <button class="item_add single-item hvr-outline-out button2"  type="submit"  ><span class="buy-ebook__button-label" style="color: white; ">Add to cart</span></button>
								</form>
					</div>
			
		</div><br>
	@if ($interested)
			
				
			
	
<div class="container" >
    <div class="col-xs-12" style="margin-top: 55px;">
    	

      
    <div class="interested">

        <div class="carousel-inner">

            <div class="item active">
            	<h3 style="margin-left: 15px;">You maybe interested in</h3><br>
                    <ul class="thumbnails" style="list-style-type: none;">
                    	@foreach ($interested as $product)
                        <li class="col-sm-3">
    						<div class="fff">
								<div class="thumbnail">
									<a href="{{ route('product.show',$product->slug) }}"><img src="/images/{{$product->image}}" style="height: 230px; alt=""></a>
								</div>
								<div class="caption">
									<h4 style="text-align: center; margin-bottom: 11px;" >{{$product->name}}</h4>
									<p>{{substr($product->description,0,110)}} {{ strlen($product->description)> 110 ? "..." : ""}}
									</p>
									<a class="btn btn-mini" href="{{ route('product.show',$product->slug) }}">» Read More</a>
								</div>
                            </div>
                              @endforeach
                        	@endif
                        </li>
                      
                       
                    </ul>
              </div>
           
        </div>
        
       
	</div>
  </div>
 </div>
 </div>
 </div>
 @endsection