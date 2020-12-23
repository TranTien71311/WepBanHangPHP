
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Trần Nguyễn Thanh Tiền</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/bootstrap.min.css')!!}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/font-awesome.min.css')!!}">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/nalika-icon.css')!!}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/owl.carousel.css')!!}">
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/owl.theme.css')!!}">
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/owl.transitions.css')!!}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/animate.css')!!}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/normalize.css')!!}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/meanmenu.min.css')!!}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/main.css')!!}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/morrisjs/morris.css')!!}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/scrollbar/jquery.mCustomScrollbar.min.css')!!}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/metisMenu/metisMenu.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/metisMenu/metisMenu-vertical.css')!!}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/calendar/fullcalendar.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/calendar/fullcalendar.print.min.css')!!}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/style.css')!!}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{!!asset('AssetAdmin/css/responsive.css')!!}">
    <!-- modernizr JS
		============================================ -->
    <script src="{!!asset('AssetAdmin/js/vendor/modernizr-2.8.3.min.js')!!}"></script>
    <script src="{!! asset('AssetAdmin/ckeditor/ckeditor.js') !!}"></script>
</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a><img class="main-logo" src="{!! asset('AssetAdmin/img/logo/logo.png')!!}" alt="" /></a>
                <strong><img src="{!! asset('AssetAdmin/img/logo/logosn.png')!!}" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="{{asset('AssetAdmin/image-user/'. Auth::user()->image)}}" alt="" /></a>
					<h2>{{Auth::user()->name}}</span></h2>
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="#"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="#"><i class="icon nalika-twitter"></i></a></li>
						<li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                    <li>
                        <a class="has-arrow" href="" aria-expanded="false"><i class="icon-wrap">-</i><span class="mini-click-non">Quản Lý Sản Phẩm</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Danh Sách Sản Phẩm" href="{{route('index-category')}}"><i class="fa fa-bars  icon-wrap"></i><span class="mini-sub-pro">Thương Hiệu</span></a></li>
                            <li><a title="Data Maps" href="{{route('index-product')}}"><i class="fa fa-laptop  icon-wrap"></i><span class="mini-sub-pro">Sản Phẩm</span></a></li>
                            <li><a title="Data Maps" href="{{route('index-supplier')}}"><i class="fa fa-user-secret  icon-wrap"></i><span class="mini-sub-pro">Nhà Cung Cấp</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="" aria-expanded="false"><i class="icon-wrap">-</i><span class="mini-click-non">Quản Lý Nhân Sự</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Danh Sách Sản Phẩm" href="{{route('index-user')}}"><i class="fa  fa-user  icon-wrap"></i><span class="mini-sub-pro">Nhân Viên</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="" aria-expanded="false"><i class="icon-wrap">-</i><span class="mini-click-non">Quản Lý Nhập Hàng</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Danh Sách Sản Phẩm" href="{{route('index-nhaphang')}}"><i class="fa  fa-truck  icon-wrap"></i><span class="mini-sub-pro">Nhập Hàng</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="" aria-expanded="false"><i class="icon-wrap">-</i><span class="mini-click-non">Quản Lý Bán Hàng</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Danh Sách Sản Phẩm" href="{{route('index-discount')}}"><i class="fa  fa-cart-arrow-down  icon-wrap"></i><span class="mini-sub-pro">Sản Phẩm Giảm Giá</span></a></li>
                        </ul>
                    </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
           <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
												<form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-mail" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-tick" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-cloud" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-folder" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-bar-chart" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="icon nalika-user"></i>
															<span class="admin-name">Tài Khoản</span>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="register.html"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                        <li><a href="{{route('get-admin-Logout')}}"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
<br/><br/><br/>
        </div>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    </div>
    <!-- jquery
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/vendor/jquery-1.12.4.min.js')!!}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/bootstrap.min.js')!!}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/wow.min.js')!!}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/jquery-price-slider.js')!!}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/jquery.meanmenu.js')!!}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/owl.carousel.min.js')!!}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/jquery.sticky.js')!!}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/jquery.scrollUp.min.js')!!}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')!!}"></script>
    <script src="{!!Asset('Assetadmin/js/scrollbar/mCustomScrollbar-active.js')!!}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/metisMenu/metisMenu.min.js')!!}"></script>
    <script src="{!!Asset('Assetadmin/js/metisMenu/metisMenu-active.js')!!}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/sparkline/jquery.sparkline.min.js')!!}"></script>
    <script src="{!!Asset('Assetadmin/js/sparkline/jquery.charts-sparkline.js')!!}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/calendar/moment.min.js')!!}"></script>
    <script src="{!!Asset('Assetadmin/js/calendar/fullcalendar.min.js')!!}"></script>
    <script src="{!!Asset('Assetadmin/js/calendar/fullcalendar-active.js')!!}"></script>
	<!-- float JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/flot/jquery.flot.js')!!}"></script>
    <script src="{!!Asset('Assetadmin/js/flot/jquery.flot.resize.js')!!}"></script>
    <script src="{!!Asset('Assetadmin/js/flot/curvedLines.js')!!}"></script>
    <script src="{!!Asset('Assetadmin/js/flot/flot-active.js')!!}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/plugins.js')!!}"></script>
    <!-- main JS
		============================================ -->
    <script src="{!!Asset('Assetadmin/js/main.js')!!}"></script>
</body>

</html>
<script>CKEDITOR.replace("contents");</script>