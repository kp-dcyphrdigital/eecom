@extends('customer.layouts.master')

@section('content')
    @foreach($products as $product)
        <!-- <p>{{ $product->id }} - {{ $product->name }}</p> -->
    @endforeach
<section class="product-container">
	<div class="heading-wrapper">
		<div class="heading">
			<span>ice hockey skates</span>
		</div>
	</div>
	<div id="homepage-product1" class="owl-carousel owl-theme info-wrapper">  
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" alt="">
					<span class="new">new</span>
				</div>
				<div class="info">
					<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product4.jpg" alt="">
				</div>
				<div class="info">
					<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
					<div class="star-rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" alt="">
					<span class="sale">Sale!</span>
				</div>
				<div class="info">
					<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product4.jpg" alt="">
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
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" alt="">
				</div>
				<div class="info">
					<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product4.jpg" alt="">
				</div>
				<div class="info">
					<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product2.jpg" alt="">
				</div>
				<div class="info">
					<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	</div>
</section>
<section class="product-container">
	<div class="heading-wrapper">
		<div class="heading">
			<span>hockey sticks</span>
		</div>
	</div>
	<div id="homepage-product2" class="owl-carousel owl-theme info-wrapper">  
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product5.jpg" alt="">
					<span class="sale">Sale!</span>
				</div>
				<div class="info">
					<p class="name">Bauer Nexus 1N Griptac Hockey Stick 17</p>
					<div class="star-rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product6.jpg" alt="">
				</div>
				<div class="info">
					<p class="name">Bauer Nexus 1N Griptac Hockey Stick 17</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product7.jpg" alt="">
				</div>
				<div class="info">
					<p class="name">Bauer Nexus 1N Griptac Hockey Stick 17</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product8.jpg" alt="">
					<span class="sale">Sale!</span>
				</div>
				<div class="info">
					<p class="name">Bauer Nexus 1N Griptac Hockey Stick 17</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product7.jpg" alt="">
					<span class="sale">Sale!</span>
				</div>
				<div class="info">
					<p class="name">Bauer Nexus 1N Griptac Hockey Stick 17</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product5.jpg" alt="">
				</div>
				<div class="info">
					<p class="name">Bauer Nexus 1N Griptac Hockey Stick 17</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product7.jpg" alt="">
				</div>
				<div class="info">
					<p class="name">Bauer Nexus 1N Griptac Hockey Stick 17</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	</div>
</section>
<section class="product-container">
	<div class="heading-wrapper">
		<div class="heading">
			<span>hockey gloves</span>
		</div>
	</div>
	<div id="homepage-product3" class="owl-carousel owl-theme info-wrapper">  
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product1.jpg" alt="">
				</div>
				<div class="info">
					<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
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
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product1.jpg" alt="">
				</div>
				<div class="info">
					<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product1.jpg" alt="">
					<span class="new">NEW</span>
					<div class="out">OUT OF STOCK</div>
				</div>
				<div class="info">
					<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
					<span class="sale">Sale!</span>
					<div class="out">OUT OF STOCK</div>
				</div>
				<div class="info">
					<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product1.jpg" alt="">
				</div>
				<div class="info">
					<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#">
			<div class="product-wrapper">
				<div class="img">
					<img src="http://syginteractive.com/web/skaters/images/products/product3.jpg" alt="">
				</div>
				<div class="info">
					<p class="name">Baur Supreme 1S Ice Hockey Skate</p>
					<p class="price">&dollar;800 <del>&dollar;1,003</del></p>
				</div>
			</div>
		</a>
	</div>
	</div>
</section>
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