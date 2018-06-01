@extends('customer.layouts.master')

@section('content')
    @foreach($products as $product)
        <!-- <p>{{ $product->id }} - {{ $product->name }}</p> -->
    @endforeach
<section class="category-header--banner container">
	<a href="#">
		<img src="http://syginteractive.com/web/skaters/images/category-banner/0.jpg" alt="">
	</a>
</section>
<section class="category-products">
	<div class="heading-wrapper">
		<div class="heading">
			<span>ice hockey skates</span>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="category-wrapper">
					<a href="#">
						<div class="img">
							<img src="http://syginteractive.com/web/skaters/images/products/product4.png" alt="">
							<div class="size">
								sizes 1.0-5.5
							</div>
						</div>
						<div class="info">
							Senior Ice Hockey Skates
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="category-wrapper">
					<a href="#">
						<div class="img">
							<img src="http://syginteractive.com/web/skaters/images/products/product4.png" alt="">
							<div class="size">
								sizes 1.0-5.5
							</div>
						</div>
						<div class="info">
							Junior Ice Hockey Skates
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="category-wrapper">
					<a href="#">
						<div class="img">
							<img src="http://syginteractive.com/web/skaters/images/products/product4.png" alt="">
							<div class="size">
								sizes 1.0-5.5
							</div>
						</div>
						<div class="info">
							Youth Ice Hockey Skates
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="category-wrapper">
					<a href="#">
						<div class="img">
							<img src="http://syginteractive.com/web/skaters/images/products/product4.png" alt="">
							<div class="size">
								sizes 1.0-5.5
							</div>
						</div>
						<div class="info">
							Recreational Ice Skates
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="category-wrapper">
					<a href="#">
						<div class="img">
							<img src="http://syginteractive.com/web/skaters/images/products/product4.png" alt="">
							<div class="size">
								sizes 1.0-5.5
							</div>
						</div>
						<div class="info">
							Hockey Skates Accessories
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="category-wrapper">
					<a href="#">
						<div class="img">
							<img src="http://syginteractive.com/web/skaters/images/products/product4.png" alt="">
							<div class="size">
								sizes 1.0-5.5
							</div>
						</div>
						<div class="info">
							Equipment Care Products
						</div>
					</a>
				</div>
			</div>
		</div>
    </div>
</section>


@endsection