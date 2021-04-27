
<!doctype html>
<html class="no-js" lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('nalika')}}/img/logo/1.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('nalika')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('nalika')}}/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{asset('nalika')}}/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="{{asset('nalika')}}/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika')}}/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="{{asset('nalika')}}/img/logo/2.png" alt="" /></a>
                <strong><img src="{{asset('nalika')}}/img/logo/1.png" alt="" /></strong>
            </div>
              <div class="nalika-profile">
                <div class="profile-dtl">
                  <a href="#"><img src="{{asset('nalika')}}/img/logo/12.png" alt="" /></a>
                  <h2><b>GO<b><span class="min-dtn"><b> TECHNOLOGY<b></span></h2>
                </div>
              </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                 <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="{{ url('/') }}">
								          <i class="icon nalika-home icon-wrap"></i>
								            <span class="mini-click-non">Home</span>
								            </a>
                        </li>
                      </ul>
                      <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="{{ url('mahasiswa') }}">
								          <i class="icon nalika-table icon-wrap"></i>
								            <span class="mini-click-non">Mahasiswa</span>
								            </a>
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
                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                         <div class="menu-switcher-pro">
                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													       <i class="icon nalika-menu-task"></i>
												   </button>
                          </div>
                     </div>
                     <div class="col-lg-11 col-md-10 col-sm-10 col-xs-18">
                        <div class="header-right-info">
                            <ul class="nav navbar-nav mai-top-nav header-right-menu ">
                            <button type="submit" class="btn btn-custon-four btn-primary primary-btn-cl"  >
                                <a class="icon nalika-unlocked author-log-ic" style="color: #F0FFF0" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                            </button>
                            </ul>
                         </div>
                  </div>
             
                    
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        
                             </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                  <div class="header-top-menu tabl-d-n hd-search-rp">
                                          <div class="breadcome-heading">
											                    </div>
                     
                                        </div>
                                    </div> 
                                </div>
                                @yield('container')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- jquery
		============================================ -->
    <script src="{{asset('nalika')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{asset('nalika')}}/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/metisMenu/metisMenu.min.js"></script>
    <script src="{{asset('nalika')}}/js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{asset('nalika')}}/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/calendar/moment.min.js"></script>
    <script src="{{asset('nalika')}}/js/calendar/fullcalendar.min.js"></script>
    <script src="{{asset('nalika')}}/js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/flot/jquery.flot.js"></script>
    <script src="{{asset('nalika')}}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{asset('nalika')}}/js/flot/curvedLines.js"></script>
    <script src="{{asset('nalika')}}/js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('nalika')}}/js/main.js"></script>

    
</body>


</html>