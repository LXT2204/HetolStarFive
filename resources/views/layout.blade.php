<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | HotelStarFive</title>

    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/chatbox.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('public/frontend/images/ico/favicon.ico') }}">

    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('public/frontend/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('public/frontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('public/frontend/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('public/frontend/images/ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />

</head>
<!--/head-->

<body>

    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
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
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="/index.php"><img src="{{ asset('public/frontend/images/home/HETOL-removebg-preview.png') }}" alt="" /></a>
                        </div>


                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">

                                <?php
                                $customer_id = Session::get('customer_id');
                                if ($customer_id != NULL) {
                                ?>
                                    <li><a href="{{ URL::to('/user/' . $customer_id) }}"><i class="fa-solid fa-user"></i>
                                            Tài Khoản</a></li>


                                    <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-cart"></i> Phòng đã chọn</a>
                                    </li>
                                    <li><a href="{{ URL::to('/cart/' . $customer_id) }}"><i class="fa fa-cart"></i>
                                            Thông tin đơn đặt</a></li>
                                    <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a>
                                    </li>


                                <?php
                                } else {
                                ?>
                                    <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a>
                                    </li>
                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">

                    <div class="col-sm-12" style="  text-align: center; margin-left:10%">
                        <div class="search_box_flex">
                            <form action="{{URL::to('/tim-kiem')}}" method="POST">
                                {{csrf_field()}}
                                <div class="search_box_flex">
                                    <div class="search_box">
                                        <div class="search_box_icon">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </div>
                                        
                                    </div>
                                    <div class="search_box_check_in">
                                        <div class="fa-solid fa-calendar-days"></div>
                                        <div class="search_box_check_in_time">
                                            <p1>Check in</p1>
                                            <input type="date" name="checkin_search">
                                        </div>
                                    </div>
                                    <div class="search_box_check_out">
                                        <div class="fa-regular fa-calendar-days"></div>
                                        <div class="search_box_check_in_time">
                                            <p1>Check out</p1>
                                            <input type="date" name="checkout_search">
                                        </div>
                                    </div>
                                    <div class="search_box_btn">
                                        <button>
                                            <span>Search</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="slider">
        <!--slider-->
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
                                    <p>Tại khách sạn chúng tôi, bạn sẽ được đắm chìm trong sự lịch lãm và tiện nghi tối
                                        đa. Với thiết kế đẳng cấp, dịch vụ tận tâm và vị trí độc đáo, chúng tôi mang đến
                                        trải nghiệm đích thực của sự sang trọng và hoàn hảo trong mỗi chuyến du lịch của
                                        bạn. </p>
                                    <button type="button" class="btn btn-default get">BOOKING NOW</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('public/frontend/images/home/Introducing-InterContinental-Danang-Danang-Private-Car.jpeg') }}" class="girl img-responsive" alt="" />
                                    <img src="{{ asset('public/frontend/images/home/') }}" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Hetol</span>-StarFive</h1>
                                    <h2>Nơi nghỉ ngơi của giấc mơ trở thành hiện thực</h2>
                                    <p>Tại khách sạn này, chúng tôi biến những giấc mơ về một cuộc sống xa hoa thành sự
                                        thật. Từ căn phòng thoải mái đến cảnh quan đẹp mắt và dịch vụ tận tâm, mọi khía
                                        cạnh của trải nghiệm tại chỗ đều là một tuyên bố về sự đáng nhớ và lãng mạn.</p>
                                    <button type="button" class="btn btn-default get">BOOKING NOW</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('public/frontend/images/home/InterContinental+Danang+Sun+Peninsula+Resort.jpg') }}" class="girl img-responsive" alt="" />
                                    <img src="{{ asset('public/frontend/images/home/') }}" class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Hetol</span>-StarFive</h1>
                                    <h2>Sự hoàn hảo không bao giờ chấp nhận sự giảm cấp</h2>
                                    <p>Chúng tôi cam kết không bao giờ từ bỏ sự tận tâm và chất lượng. Với tiêu chuẩn
                                        không ngừng nâng cao và sự quan tâm đến từng chi tiết, chúng tôi không chấp nhận
                                        sự giảm cấp. Tại đây, sự hoàn hảo là tiêu chí hàng đầu, và bạn luôn được đảm bảo
                                        trải nghiệm vượt quá kỳ vọng của mình. </p>
                                    <button type="button" class="btn btn-default get">BOOKING NOW</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('public/frontend/images/home/002955-01-PHS_Pool_Hero_mHQ-Park Hyatt Saigon.jpg') }}" class="girl img-responsive" alt="" />
                                    <img src="{{ asset('public/frontend/images/home/') }}" class="pricing" alt="" />
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
    </section>
    <!--/slider-->

    <section id="product">
        <!-- product -->
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>LOẠI PHÒNG</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-products-->
                            @foreach ($category as $key => $category)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="{{ URL::to('/danh-muc/' . $category->category_id) }}">{{ $category->category_name }}</a>
                                    </h4>
                                </div>
                            </div>
                            @endforeach


                        </div>
                        <!--/category-rooms-->



                        <div class="price-range">
                            <!--price-range-->
                            <h2>KHOẢNG TIỀN</h2>
                            <form action="{{ url('/tim-kiem-khoang-tien') }}" method="POST" id="searchForm">
                                {{ csrf_field() }}
                                <div class="well text-center">
                                    <input type="text" name="price_search" id="price_search" class="span2" value="" data-slider-min="0" data-slider-max="30000000" data-slider-step="100000" data-slider-value="[0,30000000]" id="sl2"><br />
                                    <b class="pull-left">0 VNĐ</b> <b class="pull-right">30.000.000 VNĐ</b><br />
                                    <button type="submit">
                                        <span>Search</span>
                                    </button>
                                </div>
                            </form>

                            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.js">
                            </script>

                            <script>
                                $(document).ready(function() {
                                    var slider = new Slider('#price_search');

                                    // Sự kiện slideStop xảy ra khi người dùng kết thúc kéo thanh trượt
                                    slider.on('slideStop', function(value) {
                                        // Lấy giá trị từng đỉnh (min và max)
                                        var minValue = value[0];
                                        var maxValue = value[1];

                                        // Gán giá trị vào input hidden để gửi về máy chủ khi form được submit
                                        $('#price_search').val(minValue + ',' + maxValue);
                                    });
                                });
                            </script>

                            <div class="shipping text-center">
                                <!--shipping-->
                                <img src="{{ asset('public/frontend/images/home/') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    <!-- Chatbox -->
    <div class="body-chatbot">
        <button class="chatbot-toggler">
            <span class="material-symbols-outlined">mode_comment</span>
            <span class="material-symbols-outlined close-btn">close</span>
        </button>
        <div class="chatbot">
            <header>
                <h2> </h2>
            </header>
            <ul class="chatbox">
                <li class="chat incoming">
                    <span class="material-symbols-outlined">smart_toy</span>
                    <p>Hi <br>How can I help you today?</p>
                </li>
                <div class="option">
                    <button class="buttonn" value="1"> Bạn có những loại phòng nào? </button>
                    <button class="buttonn" value="2"> Tôi có thể đặt phòng như thế nào? </button>
                    <button class="buttonn" value="3"> Tôi có thể thanh toán như thế nào? </button>
                    <button class="buttonn" value="4"> Tôi có thể checkin vào lúc nào? </button>
                    <button class="buttonn" value="5"> Liên hệ với chúng tôi </button>
                </div>
            </ul>
            <div class="chat-input">
                <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
                <span class="material-symbols-outlined">send</span>
            </div>
        </div>
    </div>
    <footer id="footer">
        <!--Footer-->
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
                                        <img src="{{ asset('public/frontend/images/home/9354b2e0244ee310ba5f.jpg') }}" alt="" />
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
                                        <img src="{{ asset('public/frontend/images/home/z4866237009450_2bd4aad9e07f1eadc944f3eb04d4ebfd.jpg') }}" alt="" />
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
                                        <img src="{{ asset('public/frontend/images/home/z4866426052703_ab1c9dfa5ed8f562615a337e8695da55.jpg') }}" alt="" />
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
                                        <img src="{{ asset('public/frontend/images/home/z4866605058072_e7eef92aa32b93e8b7617d13d993bb0d.jpg') }}" alt="" />
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
                                        <img src="{{ asset('public/frontend/images/home/z4866610576128_7df18d9fc7008efaf1bee13f299a0e91.jpg') }}" alt="" />
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
                                        <img src="{{ asset('public/frontend/images/home/DSC_9639.jpg') }}" alt="" />
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
       <img src="{{ asset('public/frontend/images/home/map.png') }}" alt="" />
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
                                <p>We value your feedback and inquiries. Please feel free to reach out to us using the
                                    contact form below. Your information is important to us, and we will respond
                                    promptly to your message.</p>
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

    </footer>
    <!--/Footer-->



    <script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>
    <script src="https://cdn.socket.io/4.7.2/socket.io.min.js"
        integrity="sha384-mZLF4UVrpi/QTWPA7BjNPEnkIfRFn4ZEO3Qt/HFklTJBj/gBOV8G3HcKn4NfQblz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('public/frontend/js/chatbox.js') }}"></script>
    <script src="https://cdn.socket.io/4.7.2/socket.io.min.js"
        integrity="sha384-mZLF4UVrpi/QTWPA7BjNPEnkIfRFn4ZEO3Qt/HFklTJBj/gBOV8G3HcKn4NfQblz" crossorigin="anonymous">
    </script>
</body>

</html>