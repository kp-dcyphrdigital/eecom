@extends('customer.layouts.master')

@section('content')
    @foreach($products as $product)
        <!-- <p>{{ $product->id }} - {{ $product->name }}</p> -->
    @endforeach
<div class="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul>
					<li><a href="#">HOME</a></li>
					<li>/</li>
					<li><a href="#">MEN'S</a></li>
					<li>/</li>
					<li><a href="#">FOOTWEAR</a></li>
					<li>/</li>
					<li><a href="#">NEUTRAL</a></li>
					<li>/</li>
					<li><a href="#">LAUNCH 5</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<section class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="plp-sortby--container">
				<ul>
					<li>
						<p>Showing 1-16 of 35 results: </p>
					</li>
					<li>
						<div class="input-wrapper">
							<form method="get">
					        	<select name="orderby" class="select-field">
										<option value="popularity">Sort by popularity</option>
										<option value="rating">Sort by average rating</option>
										<option value="date">Sort by newness</option>
										<option value="price" selected="selected">Sort by price: low to high</option>
										<option value="price-desc">Sort by price: high to low</option>
								</select>
						    </form>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="container plp-container">
	<div class="row">
		<div class="col-sm-4 col-md-3">
			<div class="plp-container--sidebar">
				<aside class="brand">
					<h3 class="main-heading">Brands</h3>
					<ul>
						<li><a href="#">Bauer</a><span class="count">(20)</span></li>
						<li><a href="#">CCM</a><span class="count">(20)</span></li>
						<li><a href="#">Easton</a><span class="count">(20)</span></li>
						<li><a href="#">Bauer</a><span class="count">(20)</span></li>
					</ul>
				</aside>
				<aside class="filter-price--slider">
					<h3 class="main-heading">Filter by price</h3>
					<div class="range-slider--wrapper">
			            <div id="html5"></div>
			            <p>(Price In $)</p>
						<input type="number" id="input-select" min="0" max="1000" step="1">
						<input type="number" min="0" max="1000" step="1" id="input-number">
					</div>
				</aside>
				<aside class="skate">
					<h3 class="main-heading">SKATE SIZE</h3>
					<div class="input-wrapper">
			        	<select name="orderby" class="select-field">
			        		    <option value="popularity">All</option>
								<option value="popularity">6 (7.5 - US / 40.5 - EU)</option>
								<option value="rating">4.5 (5.5 - US / 38 - EU)</option>
								<option value="date">5.5 (6.5 - US / 39 - EU)</option>
								<option value="price">6 (7.5 - US / 40.5 - EU)</option>
						</select>
					</div>
				</aside>
				<aside class="skate">
					<h3 class="main-heading">SKATE WIDTH</h3>
					<div class="input-wrapper">
			        	<select name="orderby" class="select-field">
			        		    <option value="popularity">All</option>
								<option value="popularity">D</option>
								<option value="rating">EE</option>
								<option value="date">Regular</option>
						</select>
					</div>
				</aside>
				<aside>
					<a href="#" class="primary-btn">reset all filters</a>
				</aside>	
			</div>
		</div>
		<div class="col-sm-8 col-md-9">
			<div class="product-container">
				<div class="info-wrapper">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<a href="/ipsa/deleniti">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="new">new</span>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate Baur Supreme 1S Ice Baur Supreme 1S Ice</p>
										<div class="star-rating">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="new">new</span>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="sale">Sale!</span>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<div class="star-rating">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="new">new</span>
										<div class="out">OUT OF STOCK</div>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="sale">Sale!</span>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<div class="star-rating">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star "></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="new">new</span>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate Baur Supreme 1S Ice</p>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="new">new</span>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="sale">Sale!</span>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<div class="star-rating">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="new">new</span>
										<div class="out">OUT OF STOCK</div>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="sale">Sale!</span>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<div class="star-rating">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star "></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="new">new</span>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="new">new</span>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="sale">Sale!</span>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<div class="star-rating">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="new">new</span>
										<div class="out">OUT OF STOCK</div>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#">
								<div class="product-wrapper">
									<div class="img">
										<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-src="http://syginteractive.com/web/skaters/images/products/product2.jpg" data-hover="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
										<span class="sale">Sale!</span>
									</div>
									<div class="info">
										<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
										<div class="star-rating">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star "></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
									</div>
								</div>
							</a>
						</div>
					</div>
			    </div>
		    </div>
		</div>
	</div>
</section>
@endsection