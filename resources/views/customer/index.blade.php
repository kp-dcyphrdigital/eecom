@extends('customer.layouts.master')

@section('content')

@foreach($products as $category)
<section class="product-container">
	<div class="heading-wrapper">
		<div class="heading">
			<span>{{ $category->name }}</span>
		</div>
	</div>
	<div id="homepage-product{{ $loop->iteration }}" class="owl-carousel owl-theme info-wrapper">
	@foreach($category->products as $product) 
		<div class="item">
			<a href="#">
				<div class="product-wrapper">
					<div class="img">
						<img src="{{ asset('/images/' . $product->image) }}" alt="{{ $product->name }}">

						@if($product->badge === 'New')
						<span class="new">NEW</span>
						@elseif($product->price < $product->rrp)
						<span class="sale">Sale!</span>
						@endif

						@if($product->stock === 0)
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
						<p class="price">&dollar;{{ $product->price }}
							@if($product->price < $product->rrp)
							<del>&dollar;{{ $product->rrp }}</del>
							@endif
						</p>
					</div>
				</div>
			</a>
		</div>
	@endforeach
	</div>
</section>
@endforeach

<section class="sale-container container-full">
	<div class="row">
		<div class="col-sm-3">
			<div class="wrapper">
				<a href="#" title="Show Now">
					<img src="http://syginteractive.com/web/skaters/images/home-sale/2018-bauer-end-of-season-sale-25-savings-nexus-skates.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="col-sm-3" title="Show Now">
			<div class="wrapper">
				<a href="#">
					<img src="http://syginteractive.com/web/skaters/images/home-sale/2018-bauer-end-of-season-sale-25-savings-nexus-vapor-gloves.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="col-sm-3" title="Show Now">
			<div class="wrapper">
				<a href="#">
					<img src="http://syginteractive.com/web/skaters/images/home-sale/2018-bauer-end-of-season-sale-25-savings-nexus-vapor-protective.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="col-sm-3" title="Show Now">
			<div class="wrapper">
				<a href="#">
					<img src="http://syginteractive.com/web/skaters/images/home-sale/2018-bauer-end-of-season-sale-25-savings-supreme-goalie.jpg" alt="">
				</a>
			</div>
		</div>
	</div>
</section>
<section class="blog-container container-full">
	<div class="row">
		<div class="col-sm-6">
			<div class="wrapper left">
				<a href="#" title="Show Now">
					<img src="http://syginteractive.com/web/skaters/images/home-sale/Untitled-1.png" alt="">
					<p>VIGON: Confidence is Key. <br/>In his third year as Australian national senior coach, Brad Vigon shares how the Mighty Roos can succeed at this year's IIHF Division II- Group A World Championships</p>
				</a>
			</div>
		</div>
		<div class="col-sm-6" title="Show Now">
			<div class="wrapper right">
				<a href="#">
					<img src="http://syginteractive.com/web/skaters/images/home-sale/Untitled-2.png" alt="">
					<p>Witness the talent and personalities of the best hockey players ever assembled in Australia! June 2nd-3rd at the Ice Arena in Adelaide. Captained by local Adelaide Adrenaline Ice Hockey Club heroes David Huxley and Josef Rezek, 34 All-Stars will compete in a Skills Competition and All-Star Game.</p>
				</a>
			</div>
		</div>
	</div>
</section>
@endsection