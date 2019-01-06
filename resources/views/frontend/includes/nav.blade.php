<!-- header -->
<div class="header">
	<div class="container">
		<ul>
			<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
			<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
			<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="{{url('/')}}"><img src="{{asset('frontend/images/logo3.jpg')}}"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			<form action="{{ route('search') }}" method="get">
				<div class="search">
					<input type="search" value="{{request()->input('query')}}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search product';}" name="query" placeholder="Search product">
				</div>
				<div class="sear-sub">
					<input type="submit" value=" " >
				</div>
				</form>
				<div class="section_room" >
					<select name="category_id" onchange="document.location.href = '/category/' + this.value" class="frm-field required" id="category_id">
						<option>Select category</option>
				          @foreach($categories as $category)
				                 <option value="{{$category->id}}">{{$category->category_name}}</option>
				                 @endforeach
				         </select>
				</div>
				
				<div class="clearfix"></div>
			
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
                @if(!Auth::check())
                
				<li><a href="{{ route('login') }}" class="use1" data-toggle="modal" data-target=""><span>Login</span></a>
				</li>	
			    @else
			    <div>
			    	<h4 style="text-align: right; ">Welcome <span style="color: blue;  font-weight: bold;">{{ ucfirst(Auth::user()->name )}}</span></h4>
			    </div>
			    
				 <li><a href="{{ route('logout') }}" class="use1" data-toggle="modal" data-target=""><span>Logout</span></a>	
				</li>
				@endif
				<li style="margin-top: 13px;"><a class="fb" href="https://www.facebook.com/gabriella.vladimir.1312"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
				<li><a class="you" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">men's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="{{asset('frontend/images/woo1.jpg')}}" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Clothing</a></li>
											<li><a href="mens.html">Wallets</a></li>
											<li><a href="mens.html">Footwear</a></li>
											<li><a href="mens.html">Watches</a></li>
											<li><a href="mens.html">Accessories</a></li>
											<li><a href="mens.html">Bags</a></li>
											<li><a href="mens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Jewellery</a></li>
											<li><a href="mens.html">Sunglasses</a></li>
											<li><a href="mens.html">Perfumes</a></li>
											<li><a href="mens.html">Beauty</a></li>
											<li><a href="mens.html">Shirts</a></li>
											<li><a href="mens.html">Sunglasses</a></li>
											<li><a href="mens.html">Swimwear</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">women's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Clothing</a></li>
											<li><a href="womens.html">Wallets</a></li>
											<li><a href="womens.html">Footwear</a></li>
											<li><a href="womens.html">Watches</a></li>
											<li><a href="womens.html">Accessories</a></li>
											<li><a href="womens.html">Bags</a></li>
											<li><a href="womens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Jewellery</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Perfumes</a></li>
											<li><a href="womens.html">Beauty</a></li>
											<li><a href="womens.html">Shirts</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="{{asset('frontend/images/woo.jpg')}}" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="electronics.html">Electronics</a></li>
					<li class=" menu__item"><a class="menu__link" href="codes.html">Short Codes</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{url('/contact')}}">contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="{{url('checkout')}}">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" ></i>
								 <span id="">Total: {{Cart::content()->count()}}</span> items</div>
								
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<script type="text/javascript">
	
</script>
<!-- //banner-top -->
<!-- banner -->
