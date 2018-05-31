<!-- Footer -->
		<footer class="footer-container">
			<div class="container footer-main">
				<div class="sitemap-footer">
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-menu">
								<h4>Customer Services</h4>
								<ul>
									<li>
										<a href="#">Contact Us</a>
									</li>
									<li>
										<a href="#">Shipping Information</a>
									</li>
									<li>
										<a href="#">Return &amp; Exchange</a>
									</li>
									<li>
										<a href="#">Find a Store</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="footer-menu">
								<h4>Community</h4>
								<ul>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Instagram</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="footer-menu">
								<h4>Account</h4>
								<ul>
									<li><a href="#">Login</a></li>
									<li><a href="#">Register</a></li>
								</ul>
							</div>
						</div>
					</div>
			    </div>
				<div class="footer-form">
					<div class="row">
						<div class="col-sm-6">
							<div class="signup-msg">
								<p>Join the skaters network team for promotionsand news updates</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="signup-container">
								<p>Email Address: </p>
								<form action="#">
									<input class="input" type="text" name="" value="" id="email" placeholder="Your Email Address">
								    <button class="btn">sign up</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="address">
					Addlon Trading p2 10-16 South St Rydalmere 2116
				</div>
			</div>
			<div class="footer-base">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="payment-icons">
								<i class="fab fa-cc-mastercard"></i>
								<i class="fab fa-cc-visa"></i>
								<i class="fab fa-cc-paypal"></i>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-info">
								<ul>
									<li>
										<a href="#">Privacy Policy</a>
									</li>
									<li>
										<a href="#">Terms &amp; Conditions</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="copyright">
								Copyright 2018 &copy; <a href="#">skaters network abn</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</section>
<!-- /Footer -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet"/>
    <script src="js/common.js"></script>
	<!-- Homepage -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Details -->
	<script src="js/pdp-js.js"></script>
    <script>
    	$(document).ready(function() {
			$('#pdp-zoom--image').lightSlider({
			    gallery: true,
			    item: 1,
			    slideMargin: 0,
			    thumbItem: 9
			});
		});
		// fullscreen API Code
        function launchFullscreen(element) {
            $("#zoomWindowFullShow").addClass("product-zoom--Window");
            $("#zoomWindowFullShowIn").addClass("display-none");
            $("#zoomWindowFullShowOut").removeClass("display-none");
            if (element.requestFullscreen) {
                element.requestFullscreen();
            } else if (element.mozRequestFullScreen) {
                element.mozRequestFullScreen();
            } else if (element.webkitRequestFullscreen) {
                element.webkitRequestFullscreen();
            } else if (element.msRequestFullscreen) {
                element.msRequestFullscreen();
            }
        }
        function exitFullscreen() {
            $("#zoomWindowFullShow").removeClass("product-zoom--Window");
            $("#zoomWindowFullShowIn").removeClass("display-none");
            $("#zoomWindowFullShowOut").addClass("display-none");
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            }
        }
	</script>
	<!-- Shipping Page -->
	<script>
		$(document).ready(function() {
			$("#different-address").change(function() {
			    if($("this.checked")) {
			       $(".billing-address").show(100);
			    }
			});
			$("#same-address").change(function() {
			    if($("this.checked")) {
			       $(".billing-address").hide(100);
			    }
			});
		});
	</script>
	<!-- Payment Page -->
	<script>
		// Tab Script
		function paymentFunction(evt, passvalue) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(passvalue).style.display = "block";
		    evt.currentTarget.className += " active";
		}
		document.getElementById("defaultOpen").click();
        // whatis
		$(document).ready(function() {
			$(".whatis").click(function() {
			       $(".whatis-contents").toggle(100);
			});
		});
	</script>
	<!-- Listing Page -->
	<script src="js/nouislider.js"></script>
	 <script>
	 	$(document).ready(function() {
		 	$(".product-container .product-wrapper .img img").mouseover(function () {
			  $(this).attr('src', $(this).data("hover"));
			}).mouseout(function () {
			  $(this).attr('src', $(this).data("src"));
			});

	    });
	</script>
	<script>
		// Price Range Slider Script with nouisslider.css and nouisslider.js file
	    var select = document.getElementById('input-select');
		for ( var i = 0; i <= 1000; i++ ){
			var option = document.createElement("option");
				option.text = i;
				option.value = i;
			    select.appendChild(option);
		}
		var html5Slider = document.getElementById('html5');
		noUiSlider.create(html5Slider, {
			start: [ 0, 1000 ],
			connect: true,
			range: {
				'min': 0,
				'max': 1000
			}
		});
		var inputNumber = document.getElementById('input-number');
		html5Slider.noUiSlider.on('update', function( values, handle ) {
			var value = values[handle];
			if ( handle ) {
				inputNumber.value = value;
			} else {
				select.value = Math.round(value);
			}
		});
		select.addEventListener('change', function(){
			html5Slider.noUiSlider.set([this.value, null]);
		});
		inputNumber.addEventListener('change', function(){
			html5Slider.noUiSlider.set([null, this.value]);
		});
	 </script>
</body>
</html>