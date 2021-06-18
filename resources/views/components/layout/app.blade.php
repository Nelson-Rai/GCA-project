<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
    <html lang="zxx">
        <head>
            <!-- Meta Tag -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name='copyright' content=''>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Title Tag  -->
            <title>Eshop - eCommerce HTML5 Template.</title>
            <!-- Favicon -->
            <link rel="icon" type="image/png" href="images/favicon.png">
            <!-- Web Font -->
            <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
            
            <!-- StyleSheet -->
            
            <!-- Bootstrap -->
            <link rel="stylesheet" href="/css/bootstrap.css">
            <!-- Magnific Popup -->
            <link rel="stylesheet" href="/css/magnific-popup.min.css">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="/css/font-awesome.css">
            <!-- Fancybox -->
            <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
            <!-- Themify Icons -->
            <link rel="stylesheet" href="/css/themify-icons.css">
			 <!-- Jquery Ui -->
			 <link rel="stylesheet" href="css/jquery-ui.css">
            <!-- Nice Select CSS -->
            <link rel="stylesheet" href="/css/niceselect.css">
            <!-- Animate CSS -->
            <link rel="stylesheet" href="/css/animate.css">
            <!-- Flex Slider CSS -->
            <link rel="stylesheet" href="/css/flex-slider.min.css">
            <!-- Owl Carousel -->
            <link rel="stylesheet" href="/css/owl-carousel.css">
            <!-- Slicknav -->
            <link rel="stylesheet" href="/css/slicknav.min.css">
            
            <!-- Eshop StyleSheet -->
            <link rel="stylesheet" href="/css/reset.css">
            <link rel="stylesheet" href="/style.css">
            <link rel="stylesheet" href="/css/responsive.css">
        
            
            
        </head>

		    
	<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

        	<!-- Header -->
			<header class="header shop">
				<!-- Topbar -->
				<div class="topbar">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-12 col-12">
								<!-- Top Left -->
								<div class="top-left">
									<ul class="list-main">
										<li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
										<li><i class="ti-email"></i> support@shophub.com</li>
									</ul>
								</div>
								<!--/ End Top Left -->
							</div>
							<div class="col-lg-8 col-md-12 col-12">
								<!-- Top Right -->
								<div class="right-content">
									<ul class="list-main">
										<li><i class="ti-location-pin"></i> Store location</li>
										<li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
										@guest
										<li><i class="ti-power-off"></i><a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a></li>
										@if (Route::has('register'))
											<li><a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a></li>
										@endif
									@else 
										<li><i class="ti-user"></i><span>{{ Auth::user()->name }}</span></li>
										<li><i class="ti-power-off"></i>
										<a href="{{ route('logout') }}"
										   class="no-underline hover:underline"
										   onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
											{{ csrf_field() }}
										</form></li>
									@endguest
									</ul>
								</div>
								<!-- End Top Right -->
							</div>
						</div>
					</div>
				</div>
				<!-- End Topbar -->
				<div class="middle-inner">
					<div class="container">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-12">
								<!-- Logo -->
								<div class="logo">
									<a href="index.html"><img src="/images/logo.png" alt="logo"></a>
								</div>
								<!--/ End Logo -->
								<!-- Search Form -->
								@include('includes.search')
							<div class="col-lg-2 col-md-3 col-12">
								<div class="right-bar">
									<!-- Search Form -->
									<div class="sinlge-bar">
										<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<div class="sinlge-bar">
										<a href="{{route('admin.dashboard.index') }}" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
									</div>
									<div class="sinlge-bar shopping">
										<a href="{{ route('order.index') }}" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>
										<!-- Shopping Item -->
										<div class="shopping-item">
											<div class="dropdown-cart-header">
												<span>2 Items</span>
												<a href="#">View Cart</a>
											</div>
											<ul class="shopping-list">
												<li>
													<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
													<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
													<h4><a href="#">Woman Ring</a></h4>
													<p class="quantity">1x - <span class="amount">$99.00</span></p>
												</li>
												<li>
													<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
													<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
													<h4><a href="#">Woman Necklace</a></h4>
													<p class="quantity">1x - <span class="amount">$35.00</span></p>
												</li>
											</ul>
											<div class="bottom">
												<div class="total">
													<span>Total</span>
													<span class="total-amount">$134.00</span>
												</div>
												<a href="checkout.html" class="btn animate">Checkout</a>
											</div>
										</div>
										<!--/ End Shopping Item -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Header Inner -->
				<div class="header-inner">
					<div class="container">
						<div class="cat-nav-head">
							<div class="row">
								<div class="col-lg-12 col-12">
									<div class="menu-area">
										{{-- Start Home Menu --}}
											<x-menu.inner>
											</x-menu.inner>
										{{-- End Home Menu --}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Header Inner -->
			</header>
			<!--/ End Header -->


{{ $slot }}
		<!-- Start Shop Newsletter  -->
		<section class="shop-newsletter section">
			<div class="container">
				<div class="inner-top">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 col-12">
							<!-- Start Newsletter Inner -->
							<div class="inner">
								<h4>Newsletter</h4>
								<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="EMAIL" placeholder="Your email address" required="" type="email">
									<button class="btn">Subscribe</button>
								</form>
							</div>
							<!-- End Newsletter Inner -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Shop Newsletter -->

	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.html"><img src="/images/logo2.png" alt="#"></a>
							</div>
							<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>NO. 342 - London Oxford Street.</li>
									<li>012 United Kingdom.</li>
									<li>info@eshop.com</li>
									<li>+032 3456 7890</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="/images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-migrate-3.0.0.js"></script>
	<script src="/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="/js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="/js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="/js/easing.js"></script>
	<!-- Active JS -->
	<script src="/js/active.js"></script>
	
</body>
</html>