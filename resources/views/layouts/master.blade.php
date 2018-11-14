<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
=======
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Demo project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{URL::to('/')}}/images/favicon.png">
    <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/styles/bootstrap4/bootstrap.min.css">
    <link href="{{URL::to('/')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/styles/main_styles.css">

>>>>>>> a728e3bc6d39bc0a4d24de6135f72bd1541d33fe
</head>
<body>

<div class="super_container">
    <header class="header">
<<<<<<< HEAD
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo"><a href="{{ route('index') }}"><img class="header_icon" src="{{URL::to('/')}}/images/icon.png" alt=""></a></div>
						<nav class="main_nav">
							<ul>
                <li class="active"><a href="{{ route('index') }}">Beranda</a></li>
                <li><a href="{{ route('berita') }}">Berita</a></li>
                <li><a href="{{ route('vlog') }}">Video Blog</a></li>
                <li><a href="{{ route('forum') }}">Forum</a></li>
                <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                <li><a href="{{ route('contact') }}">Kontak</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
							</ul>
						</nav>
						<div class="search_container ml-auto">
							<form action="#">
								<input type="search" class="header_search_input" required="required" placeholder="Type to Search...">
								<img class="header_search_icon" src="images/search.png" alt="">
							</form>

						</div>
						<div class="hamburger ml-auto menu_mm">
							<i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

  <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
  <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
  <div class="logo menu_mm"><a href="{{ route('index') }}"><img class="header_icon" src="{{URL::to('/')}}/images/icon.png" alt=""></a></div>
  <div class="search">
    <form action="#">
      <input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
      <img class="header_search_icon menu_mm" src="images/search_2.png" alt="">
    </form>
  </div>
  <nav class="menu_nav">
    <ul class="menu_mm">
      <li class="active"><a href="{{ route('index') }}">Beranda</a></li>
      <li><a href="{{ route('berita') }}">Berita</a></li>
      <li><a href="{{ route('vlog') }}">Video Blog</a></li>
      <li><a href="{{ route('forum') }}">Forum</a></li>
      <li><a href="{{ route('about') }}">Tentang Kami</a></li>
      <li><a href="{{ route('contact') }}">Kontak</a></li>
      <li><a href="{{ route('login') }}">Login</a></li>
    </ul>
  </nav>
</div>
=======
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo"><a href="{{ route('index') }}"><img class="header_icon" src="{{URL::to('/')}}/images/icon.png" alt=""></a></div>
                        <nav class="main_nav">
                            <ul>
                                <li class="active"><a href="{{ route('index') }}">Beranda</a></li>
                                <li><a href="{{ route('berita') }}">Berita</a></li>
                                <li><a href="{{ route('vlog') }}">Video Blog</a></li>
                                <li><a href="{{ route('forum') }}">Forum</a></li>
                                @if(Session::get("level") == 1)
                                <li><a href="{{ route('login') }}">New Story</a></li>
                                <li><a href="{{ route('login') }}">Stori</a></li>
                                <li><a href="{{ route('login') }}">Series</a></li>
                                <li><a href="{{ route('login') }}">Stats</a></li>
                                <li><a href="{{ route('doLogout') }}">Logout</a></li>
                                @elseif(Session::get("level")==2)
                                <li><a href="{{ route('admin') }}">Administrator</a></li>
                                @else
                                <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                                <li><a href="{{ route('contact') }}">Kontak</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                @endif
                            </ul>
                        </nav>
                        <div class="search_container ml-auto">
                            <form action="#">
                                <input type="search" class="header_search_input" required="required" placeholder="Type to Search...">
                                <img class="header_search_icon" src="{{URL::to('/')}}/images/search.png" alt="">
                            </form>
                          @if(Session::get("level") == 1)

                          @endif

                        </div>
                        <div class="hamburger ml-auto menu_mm">
                            <i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="logo menu_mm"><a href="{{ route('index') }}"><img class="header_icon" src="{{URL::to('/')}}/images/icon.png" alt=""></a></div>
        <div class="search">
            <form action="#">
                <input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
                <img class="header_search_icon menu_mm" src="{{URL::to('/')}}/images/search_2.png" alt="">
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="{{ route('index') }}">Beranda</a></li>
                <li class="menu_mm"><a href="{{ route('berita') }}">Berita</a></li>
                <li class="menu_mm"><a href="{{ route('vlog') }}">Video Blog</a></li>
                <li class="menu_mm"><a href="{{ route('forum') }}">Forum</a></li>
                <li class="menu_mm"><a href="{{ route('about') }}">Tentang Kami</a></li>
                <li class="menu_mm"><a href="{{ route('contact') }}">Kontak</a></li>
                <li class="menu_mm"><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav>
    </div>


>>>>>>> a728e3bc6d39bc0a4d24de6135f72bd1541d33fe

    @yield('content')

<footer class="footer">
    <div class="container">
        <div class="row row-lg-eq-height">
            <div class="col-lg-9 order-lg-1 order-2">
                <div class="footer_content">
                    <div class="footer_logo"><a href="#">Guelu.id</a></div>
                        <div class="footer_social">
                            <ul>
                                <li class="footer_social_facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="footer_social_twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="footer_social_pinterest"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li class="footer_social_vimeo"><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                <li class="footer_social_instagram"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="footer_social_google"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</div>
                </div>
            </div>
            <div class="col-lg-3 order-lg-2 order-1">
                <div class="subscribe">
                    <div class="subscribe_background"></div>
                        <div class="subscribe_content">
                            <div class="subscribe_title">Subscribe</div>
                            <form action="#">
                                <input type="email" class="sub_input" placeholder="Your Email" required="required">
                                <button class="sub_button">
                                    <svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve"><polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/></svg>
                                </button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<<<<<<< HEAD
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/masonry/masonry.js"></script>
<script src="plugins/masonry/images_loaded.js"></script>
<script src="js/custom.js"></script>
=======
<script src="{{URL::to('/')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{URL::to('/')}}/styles/bootstrap4/popper.js"></script>
<script src="{{URL::to('/')}}/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{{URL::to('/')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{URL::to('/')}}/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.js"></script>
<script src="{{URL::to('/')}}/plugins/easing/easing.js"></script>
<script src="{{URL::to('/')}}/plugins/masonry/masonry.js"></script>
<script src="{{URL::to('/')}}/plugins/masonry/images_loaded.js"></script>
<script src="{{URL::to('/')}}/js/custom.js"></script>
<script src="{{URL::to('/')}}/plugins/parallax-js-master/parallax.min.js"></script>


<script type="text/javascript">

</script>
>>>>>>> a728e3bc6d39bc0a4d24de6135f72bd1541d33fe

</body>
</html>
