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
					<h3 class="main-heading">FEATURED</h3>
					<ul class="select-option">
						<li>
							<a href="#">
							    <div class="checked-icons"><div class="show-icon selected"></div></div>
							    Bauer &nbsp;(20)
							</a>
						</li>
						<li>
							<a href="#">
							    <div class="checked-icons"><div class="show-icon"></div></div>
							    Bauer &nbsp;(20)
							</a>
						</li>
						<li>
							<a href="#">
							    <div class="checked-icons"><div class="show-icon"></div></div>
							    Bauer &nbsp;(20)
							</a>
						</li>
					</ul>
				</aside>
				<aside class="brand">
					<h3>HAND</h3>
					<ul class="select-option">
						<li>
							<a href="#">
							    <div class="checked-icons"><div class="show-icon selected"></div></div>
							    Bauer &nbsp;(20)
							</a>
						</li>
						<li>
							<a href="#">
							    <div class="checked-icons"><div class="show-icon"></div></div>
							    Bauer &nbsp;(20)
							</a>
						</li>
						<li>
							<a href="#">
							    <div class="checked-icons"><div class="show-icon"></div></div>
							    Bauer &nbsp;(20)
							</a>
						</li>
					</ul>
				</aside>
				<aside class="brand">
					<h3>FLEX</h3>
					<ul class="select-option">
						<li>
							<a href="#">
							    <div class="checked-icons"><div class="show-icon selected"></div></div>
							    Bauer &nbsp;(20)
							</a>
						</li>
						<li>
							<a href="#">
							    <div class="checked-icons"><div class="show-icon"></div></div>
							    Bauer &nbsp;(20)
							</a>
						</li>
						<li>
							<a href="#">
							    <div class="checked-icons"><div class="show-icon"></div></div>
							    Bauer &nbsp;(20)
							</a>
						</li>
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
				<aside class="brand">
					<h3>PATTERN</h3>
					<ul class="select-option">
						<li>
							<a href="#">
							    <div class="checked-icons"><div class="show-icon selected"></div></div>
							    Bauer &nbsp;(20)
							</a>
						</li>
						<li>
							<a href="#">
							    <div class="checked-icons"><div class="show-icon"></div></div>
							    Bauer &nbsp;(20)
							</a>
						</li>
						<li>
							<a href="#">
							    <div class="checked-icons"><div class="show-icon"></div></div>
							    Bauer &nbsp;(20)
							</a>
						</li>
					</ul>
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

						@foreach ($products as $product)
						<div class="col-md-3 col-sm-6">
							<a href="/product/{{ $product->slug }}">
								<div class="product-wrapper">
									<div class="img">
										<img src="{{ asset('/images/' . $product->image) }}" data-src="{{ asset('/images/' . $product->image) }}" data-hover="{{ asset('/images/' . $product->image) }}" alt="">
										
										@if($product->badge === 'New')
										<span class="new">NEW</span>
										@elseif($product->variants->max('price') < $product->variants->max('rrp'))
										<span class="sale">Sale!</span>
										@endif

										@if($product->variants->max('stock') === 0)
										<div class="out">OUT OF STOCK</div>
										@endif

									</div>
									<div class="info">
										<p class="name">{{ $product->name }}</p>

										@if($product->rating > 0)
										<div class="star-rating">
											@for($i=1; $i<6; $i++)
												@if($i <= $product->rating)
													<span class="fa fa-star checked"></span>
												@else
													<span class="fa fa-star"></span>
												@endif
											@endfor
										</div>
										@endif

										<p class="price">&dollar;{{ $product->variants->max('price') }}
											@if($product->variants->max('price') < $product->variants->max('rrp'))
											<del>&dollar;{{ $product->variants->max('rrp') }}</del>
											@endif
										</p>
	
									</div>
								</div>
							</a>
						</div>
						@endforeach

					</div>
			    </div>
		    </div>
		</div>
	</div>
</section>
@endsection