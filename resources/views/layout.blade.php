<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | HotelStarFive</title>
	<link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="{{asset('public/frontend/images/ico/favicon.ico')}}">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" href="{{asset('public/frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> Contact us</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> Email us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="{{asset('public/frontend/images/home/HETOL-removebg-preview.png')}}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Hồ Chí Minh
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Hồ Chí Minh</a></li>
									<li><a href="#">Hà Nội</a></li>
									<li><a href="#">Đà Nẵng</a></li>
									<li><a href="#">Sa Pa</a></li>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa-solid fa-user"></i> Favorites</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Recently Viewed</a></li>
								<li>
									<div class="btn-group pull-right">
										<div class="btn-group">
											<button type="button" class="btn btn-default dropdown-toggle language" data-toggle="dropdown">
												Tiếng Việt
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
												<li><a href="#">Tiếng Việt</a></li>
												<li><a href="#">English</a></li>
												<li><a href="#">繁體中文</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/home')}}" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Room<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="login.html">Login</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
									</ul>
								</li>
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="search_box_flex">
							<div class="search_box">
								<div class="search_box_icon">
									<i class="fa-solid fa-magnifying-glass"></i>
								</div>
								<div class="search_box_search">
									<input type="text" placeholder="Search" />
								</div>
							</div>
							<div class="search_box_check_in">
								<i class="fa-regular fa-calendar"></i>
								<div class="search_box_check_in_time">
									<p1>Check in</p1>
									<p2>--/--/--</p2>
								</div>
							</div>
							<div class="search_box_check_out">
								<div class="search_box_check_in_time">
									<p1>Check out</p1>
									<p2>--/--/--</p2>
								</div>
							</div>
							<div class="search_box_room">
								<i class="fa-solid fa-bed"></i>
								<div class="search_box_check_in_time">
									<p1>Guests and rooms</p1>
									<p2>2 Guests, 1 Room</p2>
								</div>
							</div>
							<div class="search_box_btn">
								<button>
									<span>Search</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Hetol</span>-StarFive</h1>
									<h2>Thăng hoa trong sang trọng, khám phá thế giới của sự hoàn hảo!</h2>
									<p>Tại khách sạn chúng tôi, bạn sẽ được đắm chìm trong sự lịch lãm và tiện nghi tối đa. Với thiết kế đẳng cấp, dịch vụ tận tâm và vị trí độc đáo, chúng tôi mang đến trải nghiệm đích thực của sự sang trọng và hoàn hảo trong mỗi chuyến du lịch của bạn. </p>
									<button type="button" class="btn btn-default get">BOOKING NOW</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/home/Introducing-InterContinental-Danang-Danang-Private-Car.jpeg')}}" class="girl img-responsive" alt="" />
									<img src="{{asset('public/frontend/images/home/')}}" class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Hetol</span>-StarFive</h1>
									<h2>Nơi nghỉ ngơi của giấc mơ trở thành hiện thực</h2>
									<p>Tại khách sạn này, chúng tôi biến những giấc mơ về một cuộc sống xa hoa thành sự thật. Từ căn phòng thoải mái đến cảnh quan đẹp mắt và dịch vụ tận tâm, mọi khía cạnh của trải nghiệm tại chỗ đều là một tuyên bố về sự đáng nhớ và lãng mạn.</p>
									<button type="button" class="btn btn-default get">BOOKING NOW</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/home/InterContinental+Danang+Sun+Peninsula+Resort.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{asset('public/frontend/images/home/')}}" class="pricing" alt="" />
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>Hetol</span>-StarFive</h1>
									<h2>Sự hoàn hảo không bao giờ chấp nhận sự giảm cấp</h2>
									<p>Chúng tôi cam kết không bao giờ từ bỏ sự tận tâm và chất lượng. Với tiêu chuẩn không ngừng nâng cao và sự quan tâm đến từng chi tiết, chúng tôi không chấp nhận sự giảm cấp. Tại đây, sự hoàn hảo là tiêu chí hàng đầu, và bạn luôn được đảm bảo trải nghiệm vượt quá kỳ vọng của mình. </p>
									<button type="button" class="btn btn-default get">BOOKING NOW</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/home/002955-01-PHS_Pool_Hero_mHQ-Park Hyatt Saigon.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{asset('public/frontend/images/home/')}}" class="pricing" alt="" />
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section id="product"> <!-- product -->
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>LOẠI PHÒNG</h2>
						<div class="panel-group category-products" id="accordian"><!--category-products-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											PHÒNG ĐƠN
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Phòng VIP</a></li>
											<li><a href="#">Phòng thường </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											PHÒNG ĐÔI
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Phòng VIP</a></li>
											<li><a href="#">Phòng thường</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											PHÒNG GIA ĐÌNH
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Gia đình ít hơn 10 người</a></li>
											<li><a href="#">Gia đình nhiều hơn 10 người</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">PHÒNG THEO NHÓM</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">PHÒNG CHO DOANH NGHIỆP</a></h4>
								</div>
							</div>
						</div><!--/category-products-->



						<div class="price-range"><!--price-range-->
							<h2>KHOẢNG TIỀN</h2>
							<div class="well text-center">
								<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="30000000" data-slider-step="5" data-slider-value="[0,30000000]" id="sl2"><br />
								<b class="pull-left">0 VNĐ</b> <b class="pull-right">30.000.000 VNĐ</b>
							</div>
						</div><!--/price-range-->

						<div class="shipping text-center"><!--shipping-->
							<img src="{{asset('public/frontend/images/home/')}}" alt="" />
						</div><!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Hetol</span>-StarFive</h2>
							<p>CO-FOUNDER</p>
						</div>
					</div>
					<div class="col-sm-10">
						<div class="col-sm-2">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/home/9354b2e0244ee310ba5f.jpg')}}" alt="" />
									</div>
									<!-- <div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div> -->
								</a>
								<p>Trần Sĩ Hoàng</p>
								<h2>Jul 4 <sup>th</sup> 2003</h2>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/home/z4866237009450_2bd4aad9e07f1eadc944f3eb04d4ebfd.jpg')}}" alt="" />
									</div>
									<!-- <div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div> -->
								</a>
								<p>Phạm Thị Trúc Linh</p>
								<h2>Feb 21<sup>st</sup> 2003 </h2>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/home/z4866426052703_ab1c9dfa5ed8f562615a337e8695da55.jpg')}}" alt="" />
									</div>
									<!-- <div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div> -->
								</a>
								<p>Nguyễn Ngọc Diệu Linh</p>
								<h2>Jul 17 <sup>th</sup> 2003</h2>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/home/z4866605058072_e7eef92aa32b93e8b7617d13d993bb0d.jpg')}}" alt="" />
									</div>
									<!-- <div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div> -->
								</a>
								<p>Lê Thị Ánh Hồng</p>
								<h2>Mar 8 <sup>th</sup> 2003</h2>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/home/z4866610576128_7df18d9fc7008efaf1bee13f299a0e91.jpg')}}" alt="" />
									</div>
									<!-- <div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div> -->
								</a>
								<p>Lê Xuân Thạch</p>
								<h2>Apr 22 <sup>nd</sup> 2003</h2>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/home/DSC_9639.jpg')}}" alt="" />
									</div>
									<!-- <div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div> -->
								</a>
								<p>Đỗ Văn Sáng</p>
								<h2>Feb 1 <sup>st</sup>2002</h2>
							</div>
						</div>
					</div>
					<!-- <div class="col-sm-3">
						<div class="address">
							<img src="{{asset('public/frontend/images/home/map.png')}}" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div> -->
				</div>
			</div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Help</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Privacy policy</a></li>
								<li><a href="#">Cookie Policy</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Our Company</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Solo traveler</a></li>
								<li><a href="#">Couple/Pair</a></li>
								<li><a href="#">Family travelers</a></li>
								<li><a href="#">Group travelers</a></li>
								<li><a href="#">Business travelers</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<!-- <div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div> -->
					<div class="col-sm-5">
						<div class="single-widget">
							<h2>Get exclusive inspiration for your next stay – subscribe to our newsletter.</h2>
							<form action="#" class="searchform">
								<div class="searchform-text">
									<input type="text" placeholder="Your email address" />
									<div class="searchform-btn">
										<button>
											<span>Subcribe</span>
										</button>
									</div>
								</div>
								<p>We value your feedback and inquiries. Please feel free to reach out to us using the contact form below. Your information is important to us, and we will respond promptly to your message.</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->



	<script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
	<script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>

</html>