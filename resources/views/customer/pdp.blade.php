@extends('customer.layouts.master')

@section('content')
<script>
	var variants = {!! $variants->toJson() !!};
</script>

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
<section class="container pdp-container">
	<div class="row">
		<div class="col-sm-7">
			<div class="plp-heading">
				<h1>{{ $product->name }}</h1>
			    <span>[Senior]</span>
			</div>
			<div class="pdp-container--image">
				<div class="zoomwindowfull-icon" id="zoomWindowFullShowIn" onclick="launchFullscreen(document.getElementById('zoomWindowFullShow'));">
                    <i class="fa fa-expand" aria-hidden="true"></i>
                </div>
				<div class="pdp-zoom--container" id="zoomWindowFullShow">
					<div class="zoomwindowfull-icon display-none" id="zoomWindowFullShowOut" onclick="exitFullscreen();">
	                    <i class="fa fa-compress" aria-hidden="true"></i>
	                </div>
				    <ul id="pdp-zoom--image">
				        <li data-thumb="http://syginteractive.com/web/skaters/images/products/product1.jpg">
				            <img src="http://syginteractive.com/web/skaters/images/products/thumbs/thumb1.jpg" />
				        </li>
				        <li data-thumb="http://syginteractive.com/web/skaters/images/products/product2.jpg">
				            <img src="http://syginteractive.com/web/skaters/images/products/thumbs/thumb2.jpg" />
				        </li>
				        <li data-thumb="http://syginteractive.com/web/skaters/images/products/product3.jpg">
				            <img src="http://syginteractive.com/web/skaters/images/products/thumbs/thumb3.jpg" />
				        </li>
				        <li data-thumb="http://syginteractive.com/web/skaters/images/products/product4.jpg">
				            <img src="http://syginteractive.com/web/skaters/images/products/thumbs/thumb4.jpg" />
				        </li>
				    </ul>
				</div>
			</div>
		</div>
		<div class="col-sm-5">
			<div class="pdp-container--info">
				<div class="price">
					&dollar;{{ $product->price }}
					<del>&dollar;{{ $product->rrp }}</del>
				</div>
				<div class="info">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
					<ul>
						<li>
							600D Ripstop Polyester Construction
						</li>
						<li>
							All-Terrain Wheels
						</li>
						<li>
							2 End Skate Pocket
						</li>
					</ul>
				</div>
				@if ($product->stock > 0 )
				<div class="color">
					<ul>
						<li>
							<a href="#" class="selected">
								<img src="http://syginteractive.com/web/skaters/images/products/thumbs/thumb1.jpg" width="60" height="60" alt="">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="http://syginteractive.com/web/skaters/images/products/thumbs/thumb2.jpg" width="60" height="60" alt="">
							</a>
						</li>
					</ul>
				</div>

				@isset($attributeSet)
				@foreach($attributeSet as $attribute)
				
				@if ($attribute->first() != "0")
				<div class="row">
					<div class="col-sm-8">
						<div class="select-wrapper">
							<label for="{{ ('attribute' . $loop->iteration ) }}">{{ __('attribute' . $loop->iteration) }}:</label>
							<select name="{{ ('attribute' . $loop->iteration ) }}" id="{{ ('attribute' . $loop->iteration ) }}">
								<option value="">--</option>
								@foreach($attribute as $attributeValue)
									<option value="{{ $attributeValue }}">{{ $attributeValue }}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				@endif
				
				@endforeach
				@endisset

				<div class="quantity">
					<label for="quantity">Quantity:</label>
					<input type="text" id="quantity" value="1">
				</div>
				<div class="add-to-cart">
					<button class="primary-btn" value="{{ $product->slug }}">add to cart</button>
				</div>
				@else
				<h3 class="offer">OUT OF STOCK</h3>
				@endif
				<div class="extra-details">
					<p class="offer">FREE SHIPPING ON ORDERS OVER $50 AUSTRALIA WIDE</p>
					<ul>
						<li><a href="#">find a store</a></li>
						<li><a href="#">shipping + returns</a></li>
						<li><a href="#">contact us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="pdp-container--info subinfo">
				<hr/>
				<p>When your chance comes, you need a quick-reacting stick you can count on. The Vapor X600 Lite is designed with all-new BridgeCore blade technology for added stability to allow you to have more control over the puck and catch goalies off guard.</p>
				<hr/>
				<h2>HIGHLIGHTS</h2>
				<ul>
					<li>VAPOR Low-Kick flex profile</li>
					<li>VAPOR Low-Kick flex profile</li>
					<li>VAPOR Low-Kick flex profile</li>
					<li>VAPOR Low-Kick flex profile</li>
				</ul>
				<hr/>
				<h3>SPECIFICATIONS</h3>
				<div class="product-main-attributes clearfix">
                    <ul>
                        <li class="attribute">
                            <span class="label">Platform: </span> 
                            <span class="value">Universal Contoured Platform     </span>
                        </li> 
                        <li class="attribute">
                            <span class="label">Midsole Layout: </span> 
                            <span class="value">BioMoGo DNA Layout     </span>
                        </li> 
                        <li class="attribute">
                            <span class="label">Construction Type: </span> 
                            <span class="value">Strobel     </span>
                        </li> 
                        <li class="attribute">
                            <span class="label">Water Resistant: </span> 
                            <span class="value">No     </span>
                        </li> 
                        <li class="attribute">
                            <span class="label">Waterproof: </span> 
                            <span class="value"> no     </span>
                        </li> 
                        <li class="attribute">
                            <span class="label">Surface: </span> 
                            <span class="value">Road/Track     </span>
                        </li> 
                        <li class="attribute">
                            <span class="label">Weight (g): </span> 
                            <span class="value">255g     </span>
                        </li> 
                        <li class="attribute">
                            <span class="label">Midsole Drop (mm): </span> 
                            <span class="value">10mm    </span>
                        </li> 
                    </ul>
                </div>
			</div>
		</div>
	</div>
</section>

@endsection