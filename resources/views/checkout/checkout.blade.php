@extends('frontend.master')
@section('content')
<!-- check out -->
<div class="checkout">
	<div class="container">
		
		<div class="col-sm-1-12|auto">
			  
			</div>
		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			@if (Cart::content()->count() === 0 )

					<h3 style="text-align: center;">Your Cart Is Empty</h>

					@else
					<h3>Your Shopping Bag</h3>
					@include('includes.message')

			<table class="timetable_sub">
				<thead>
					<tr>
						<th>Remove</th>
						<th>Product</th>
						<th>Quantity</th>
						<th>Product Name</th>
						<th>Product Price</th>
					</tr>
				</thead>
				
		
				   @foreach(Cart::content() as $row)
					<tr class="rem1">
						<td class="invert-closeb">
							<a class="aria-label" href="{{url('remove-cart/'.$row->rowId)}}"
							style="font-size:15px;" >&#x274C;</a>
							<td class="invert-image"><a href="single.html"><img src="{{url('images/'.$row->options->image)}}" alt=" " class="img-responsive" /></a></td>
						</td>
						
				<td class="invert">
					  <div class="quantity"> 
						<div class="quantity-select">  
						<form method="post" action="{{ url('cart/update',$row->rowId) }}">          {{ csrf_field() }}                   
							<input type="hidden" value="{{$row->id}}" name="id" >
							<input type="hidden" value="{{$row->name}}" name="name" >	
						    <input type="number" value="{{$row->qty}}" autocomplete="off" name="qty" class="entry value" min="1" max="5">
							&nbsp;
							<input type="submit" name="submit" value="Update" class="btn btn-info" >
						</form> 
						</div>
					</div>
				</td>
						<td class="invert">{{$row->name}}</td>
						<td class="invert">${{$row->price}}</td>
					</tr>
					@endforeach								
			</table>
			
		</div>

		<div class="checkout-left">	
				
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="javascript:history.back()"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
				</div>
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">

					<h4>Shopping basket</h4>
					@foreach(Cart::content() as $row)
					<ul>
						 
						<li>{{$row->name}} <i>-</i> <span>${{$row->subtotal}}</span></li>
						
						</ul>
						@endforeach
						<hr>
                    <ul>
						<li><b>Tax</b> <i>-</i> <span><b>${{Cart::tax()}}</b></span></li>
						<li><b>Total</b> <i>-</i> <span><b>${{Cart::total()}}</b></span></li>
					</ul>
					

				<form action="{{ url('charge') }}" method="post" style="text-align: right; margin: 31px 20px 31px 31px;">
					 {{ csrf_field() }}
				  <script
				    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
				    data-key="{{ env('STRIPE_KEY') }}"
				    data-amount=" {{number_format(Cart::total(), 2)*100}}"
				    data-name="Smart Shop"
				    data-description="Safe Payment"
				    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
				    data-locale="auto"
				    data-currency="usd">
				  </script>
				</form>
          
					
				</div>

                @endif
			<div class="clearfix"> </div>
				
			</div>


<!-- //check out -->
<!-- //product-nav -->
<div class="coupons" style="margin-top: 31px;">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

@endsection
