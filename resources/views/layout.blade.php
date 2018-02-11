<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>T Shop</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link rel="icon" href="images/thuc.jpg">
		<link rel="image_src" href="images/thuc.jpg">
		{{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  --}}
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
                    {{--  Tìm kiếm  --}}
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="T shop">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">Tài khoản của  tôi</a></li>
							<li><a href="{{route('cart')}}">Giỏ hàng</a></li>
							<li><a href="{{route('checkout')}}">Kiểm tra đơn hàng</a></li>					
							<li><a href="{{route('user_login')}}">Đăng nhập</a></li>
							<li><a href="{{route('user_register')}}">Đăng ký</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="{{route('/')}}" class="logo pull-left"><img src="images/logoT.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">Nữ</a>					
								<ul>
									<li><a href="./products.html">Áo</a></li>									
									<li><a href="./products.html">Quần</a></li>
									<li><a href="./products.html">Phụ kiện</a></li>									
								</ul>
							</li>															
                            <li><a href="./products.html">Nam</a>
                                <ul>
                                        <li><a href="./products.html">Áo</a></li>									
                                        <li><a href="./products.html">Quần</a></li>
                                        <li><a href="./products.html">Phụ kiện</a></li>									
                                </ul>
                            </li>									
                            <li><a href="./products.html">Trẻ em</a>
                                <ul>
                                        <li><a href="./products.html">Áo</a></li>									
                                        <li><a href="./products.html">Quần</a></li>
                                        <li><a href="./products.html">Phụ kiện</a></li>									
                                </ul>
                            </li>
                            <li><a href="./products.html">Thể thao</a>
								<ul>									
									<li><a href="./products.html">Giày</a></li>
									<li><a href="./products.html">Áo</a></li>
									<li><a href="./products.html">Quần</a></li>
								</ul>
							</li>	
							<li><a href="./products.html">Sản phẩm bán chạy</a></li>
						</ul>
					</nav>
				</div>
			</section>
            @yield('main')
			@yield('cart')
			@yield('contact')
			@yield('checkout')
			@yield('register')
			@yield('login')
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Chuyển trang</h4>
						<ul class="nav">
							<li><a href="{{route('/')}}">Trang chủ</a></li>  
							<li><a href="{{route('about')}}">Giới thiệu về T-Shop</a></li>
							<li><a href="{{route('contact')}}">Liên hệ với T-Shop</a></li>
							<li><a href="{{route('cart')}}">Giỏ hàng</a></li>
							<li><a href="{{route('user_login')}}">Đăng nhập</a></li>
							<li><a href="{{route('user_register')}}">Đăng ký</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>Tài khoản của bạn</h4>
						<ul class="nav">
							<li><a href="#">Thông tin tài khoản</a></li>
							<li><a href="#">Lịch sử mua hàng</a></li>
							{{--  <li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>  --}}
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logoT.png" class="site_logo" alt=""></p>
						<p>T-Shop sự lựa chọn của giới trẻ</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>13/1/2018 <br>Coding by PĐT <br>
				Template <br>
				front-end__"http://www.free-css.com/free-css-templates/page201/shopper"<br>
				back-end__"http://www.free-css.com/free-css-templates/page197/siminta"
				</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>
