@extends('customer.layouts.master')

@section('content')
<section class="category-header--banner container">
	<a href="#">
		<img src="http://syginteractive.com/web/skaters/images/category-banner/0.jpg" alt="">
	</a>
</section>
<section class="category-products">
	<div class="heading-wrapper">
		<div class="heading">
			<span>{{ $category->name }}</span>
		</div>
	</div>
	<div class="container">
		<div class="row">

			@foreach ($subCategories as $subCategory)
			<div class="col-sm-4">
				<div class="category-wrapper">
					<a href="/c/{{ $subCategory->slug}}">
						<div class="img">
							<img src="{{ asset('images/' . $subCategory->image) }}" alt="">
							<div class="size">
								sizes 1.0-5.5
							</div>
						</div>
						<div class="info">
							{{ $subCategory->name }}
						</div>
					</a>
				</div>
			</div>
			@endforeach

		</div>
    </div>
</section>


@endsection