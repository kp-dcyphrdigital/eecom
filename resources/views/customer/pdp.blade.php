@extends('customer.layouts.master')

@section('content')
<style>
   .pdp-select--type ul li.visible{background: #000; color: #ffffff;border: 1px solid #000000;}
   .pdp-select--type ul li.selected{background: #0087ce !important; color: #ffffff !important;border: 1px solid #0087ce !important;}
   .valerror{color:#ff0000;font-size: 12px; }
</style>
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
				<form action='' method='post' name='add_to_cart' onsubmit="return validate();">
					@isset($attributeSet)
					@foreach($attributeSet as $attribute)
					@if ($attribute->first() != "0")
					<div class="row">
						<div class="col-md-12">
							<div class="pdp-select--type">

								@php
									$attributeId= 'attribute' . $loop->iteration;
									$head_class= 'head_'.$attributeId;
								@endphp
	                            <input type='hidden' name='{{$attributeId}}' />
								<p class="head {{ $head_class }}">{{ __('attribute' . $loop->iteration) }}: <span style='font-family:Proxima,Helvetica,Arial,sans-serif'></span></p>
								<ul class='{{ $attributeId }}'>
									@foreach($attribute as $attributeValue)
										<li class='filter visible' data-id="{{ $attributeId }}" data-value="{{ $attributeValue }}">{{ $attributeValue }}</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					@endif
					@endforeach
					@endisset
						<div class="quantity">
							<label for="quantity">Quantity:<span style='font-family:Proxima,Helvetica,Arial,sans-serif'></span></label>
							<input type="text" id="quantity" value="1">
						</div>
						<div class="add-to-cart">
							<button class="primary-btn" type="submit" name='add_to_cart' value="{{ $product->slug }}">add to cart</button>
						</div>
				</form>
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

<script>
 let variants = {!! $variants->toJson() !!};
	
 let attributeids_names = $( ".pdp-select--type ul" ).map(function() {
    	return $(this).attr('class');
 }).get();

 let attributeids_values = $( ".pdp-select--type ul li" ).map(function() {
    	return $(this).attr('data-value');
 }).get();

$(document).on('click','.filter',function(){
	let value = $(this).data('value');
	let key = $(this).data('id');
	$('.pdp-select--type').find(".head_"+key+" span").text(value).removeClass("valerror");
	$("input[name='"+key+"']").val(value);
	$("."+key).find("li").removeClass("selected");
	let data = $.grep( variants, function( n, i ) {
	  return n[key]==value;
	});
	let uniqueNames = [];
	for(i = 0; i< data.length; i++){  
		for(x in attributeids_names) {
			if(uniqueNames.indexOf(data[i][attributeids_names[x]]) === -1){
		        uniqueNames.push(data[i][attributeids_names[x]]);        
		    }    
		}
	}
	$(".pdp-select--type ul").find("li").removeClass('visible');
	$("."+key).find("li").removeClass("selected");
	$(this).addClass("selected");
	for(i = 0; i< uniqueNames.length; i++){  
		let target = $(".pdp-select--type ul").find("li[data-value='" + uniqueNames[i] + "']");
	    if(target.length > 0){
             $(target).addClass('visible');
	    }
	}
	$( ".filter" ).each(function( index ) {
		if(!$(this).hasClass('visible')){
			if($(this).hasClass('selected')){
				let attr_id = $(this).attr('data-id');
				$(".head_"+attr_id).find("span").text("");
				$("input[name='"+attr_id+"']").val("");
				$(this).removeClass("selected");
			}
		}
	});
	return false;
});

function validate(){
   $(".pdp-select--type p").find("span").removeClass("valerror");
   $(".quantity").find("label span").removeClass("valerror").text("");
   let form = true;
   for(i = 0; i< attributeids_names.length; i++){  
   	   if($("input[name='"+attributeids_names[i]+"']").val()==''){
          $(".head_"+attributeids_names[i]).find("span").text(" - Please Select Option").addClass("valerror");
          form = false;
   	   }
   }

   if($('#quantity').val()==''){
   	   $(".quantity").find("label span").text(" - Please Enter Quantity").addClass("valerror");
      form = false;
   }

   if(form == false){
       return false;
   }

    let product = $(".add-to-cart > button").val();
        $.ajax({
            url: "/cart", 
            method: "post", 
            data: { product: product },
            success: function(result) {
                $(".fa-shopping-cart").text(result);
                console.log(true);
            }
        });
    return false;
}
</script>

@endsection