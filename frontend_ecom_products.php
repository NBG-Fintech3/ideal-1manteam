<?php
session_start();

?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>iDeal - Offers</title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available Classes:

            'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

            'sidebar-l'                  Left Sidebar and right Side Overlay
            'sidebar-r'                  Right Sidebar and left Side Overlay
            'sidebar-mini'               Mini hoverable Sidebar (> 991px)
            'sidebar-o'                  Visible Sidebar by default (> 991px)
            'sidebar-o-xs'               Visible Sidebar by default (< 992px)

            'side-overlay-hover'         Hoverable Side Overlay (> 991px)
            'side-overlay-o'             Visible Side Overlay by default (> 991px)

            'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

            'header-navbar-fixed'        Enables fixed header
            'header-navbar-transparent'  Enables a transparent header (if also fixed, it will get a solid dark background color on scrolling)
        -->
        <div id="page-container" class="sidebar-l sidebar-mini sidebar-o side-scroll header-navbar-fixed header-navbar-transparent">
            <!-- Side Overlay-->
            
            <!-- END Side Overlay -->
            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op">
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                            
                            <a class="h5 text-white">
                                <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">iDeal 4 more</span>
                            </a>
                            
                                <div class="block-content block-content-full text-center">
                                    <div>
                                        <img class="img-avatar img-avatar96" src="assets/img/avatars/qr2.png" alt="">
                                    </div>
                                    <div class="h4 font-w300 text-muted">Jeremy Fuller</div>
                                </div>
                                
                                <div class="block-content">
                                    <div class="row items-push text-center">
                                        
                                       
                                            <h4><div class="push-"><i class="fa fa-address-card-o"></i>ID</div></h4>
                                            <div class="h4 font-w300 text-muted">213516462</div>
                                        
                                    </div>
                                </div>
                            
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content side-content-full">
                            <ul class="nav-main">
                                
                                
                                
                                <li><a  class="nav-submenu" data-toggle="nav-submenu"  ><i class="si si-basket"></i><span class="sidebar-mini-hide">Deals</span></a>
                                <ul>
                                        <li>
                                            <a href="frontend_ecom_products.php">Accessories</a>
                                        </li>
                                        <li>
                                            <a href="frontend_ecom_products.php">Food/Drink</a>
                                        </li>
                                        <li>
                                            <a href="frontend_ecom_products.php">Miscellaneous</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                
                                <li><a href="base_pages_dashboard.php"   ><i class="si si-user"></i><span class="sidebar-mini-hide">Profile</span></a></li>
                                
                                <li><a href="frontend_blog_classic.html"   ><i class="fa fa-building-o"></i><span class="sidebar-mini-hide">Stores</span></a></li>
                                
                                <li><a href="base_comp_maps_full.html"   ><i class="fa fa-map-marker"></i><span class="sidebar-mini-hide">Location</span></a></li>
                                
                                <li><a href="frontend_about.html"   ><i class="si si-info"></i><span class="sidebar-mini-hide">About us</span></a></li>
                                
                                <li><a href="frontend_about.html"   ><i class="si si-logout"></i><span class="sidebar-mini-hide">Log out</span></a></li>
                                
                                
                                
                                
                                
                            
                            </ul>
                        </div>
                        <!-- END Side Content -->
                        <div class="col-sm-4">
                            
                            <div class="font-s13 push">
                                <strong>Company, Inc.</strong><br>
                                980 Folsom Ave, Suite 1230<br>
                                
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </div>
                            <div class="font-s13">
                                <i class="si si-envelope-open"></i> company@example.com
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- e-Commerce Header -->
                <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-right">
                    
                    
                </ul>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                    
                    <li class="visible-xs">
                        <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                        
                    </li>
                    <li class="js-header-search header-search">
                        <form class="form-horizontal" action="base_pages_search.html" method="post">
                            
                        </form>
                    </li>
                </ul>
                <!-- END Header Navigation Left -->
            </header>
                <!-- END e-Commerce Header -->
            <div class="bg-image" style="background-image: url('assets/img/various/ecom_product6.png');">
                    <div class="bg-primary-dark-op">
                        <section class="content content-full content-boxed overflow-hidden">
                            <!-- Section Content -->
                            <div class="push-30-t push-30 text-center">
                                <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Super Deals</h1>
                                
                            </div>
                            <!-- END Section Content -->
                        </section>
                    </div>
                </div>
                <!-- Side Content and Products -->
                <div class="bg-gray-lighter">
                    <section class="content content-boxed">
                        <div class="row">
                            
                            <div class="col-lg-9">
                                <!-- Sort and Show Filters -->
                                
                                <!-- END Sort and Show Filters -->

                                <!-- Products -->
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">739 Ratings</div>
                            <div class="text-warning push-10-t animated flipInX">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span class="text-muted">(4.9)</span>
                            </div>
                        </div>
                                        <div class="block">
                                            
                                                <div class="row js-gallery">
                                                    <div class="col-xs-12 push-10">
                                                        <a class="img-link" href="assets/img/various/im1.jpg">
                                                            <img class="img-responsive" src="assets/img/various/im1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <a class="img-link" href="assets/img/various/im2.jpg">
                                                            <img class="img-responsive" src="assets/img/various/im2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <a class="img-link" href="assets/img/various/im3.jpg">
                                                            <img class="img-responsive" src="assets/img/various/im3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <a class="img-link" href="assets/img/various/im2.jpg">
                                                            <img class="img-responsive" src="assets/img/various/im2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                            
                                            <div class="block-content">
                                                <div class="push-10">
                                                    <div class="h4 font-w600 text-success pull-right push-10-l">$80 - 30% return</div>
                                                    <a class="h4" href="frontend_ecom_product.html">Zara</a>
                                                </div>
                                                <p class="text-muted">Classic blue jeans</p>
                                                <a class="btn btn-default" href="magazimap.html">Store Location</a>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="block">
                                            
                                                <div class="row js-gallery">
                                                    <div class="col-xs-12 push-10">
                                                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">739 Ratings</div>
                            <div class="text-warning push-10-t animated flipInX">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span class="text-muted">(4.9)</span>
                            </div>
                        </div>
                                                        <a class="img-link" href="assets/img/various/im1.jpg">
                                                            <img class="img-responsive" src="assets/img/various/im1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <a class="img-link" href="assets/img/various/im2.jpg">
                                                            <img class="img-responsive" src="assets/img/various/im2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <a class="img-link" href="assets/img/various/im3.jpg">
                                                            <img class="img-responsive" src="assets/img/various/im3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <a class="img-link" href="assets/img/various/im2.jpg">
                                                            <img class="img-responsive" src="assets/img/various/im2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                            
                                            <div class="block-content">
                                                <div class="push-10">
                                                    <div class="h4 font-w600 text-success pull-right push-10-l">$80 - 30% return</div>
                                                    <a class="h4" href="frontend_ecom_product.html">Zara</a>
                                                    
                                                </div>
                                                
                                                <p class="text-muted">Classic blue jeans</p>
                                                <a class="btn btn-default" href="magazimap.html">Store Location</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                            
                                    
                                    
                                    
                                    
                                    
                                </div>
                                <!-- END Products -->
                            </div>
                        </div>
                    </section>
                </div>
                <!-- END Side Content and Products -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/app.js"></script>
        
        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (Appear plugin)
                App.initHelpers('appear');
            });
        </script>
    </body>
</html>