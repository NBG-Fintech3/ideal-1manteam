<?php
session_start();

?>
	 
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    
    <head>
        <meta charset="utf-8">

        <title>iDeal - Profile</title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
      
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

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">

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
        -->
        <div id="page-container" class="sidebar-l sidebar-mini sidebar-o side-scroll header-navbar-fixed header-navbar-transparent">
            <!-- Page Header -->
                <div class="block-content block-content-full text-center bg-image" style="background-image: url('assets/img/photos/photo12.jpg');">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/img/avatars/avatar7.jpg" alt="">
                                </div>
                                <div class="block-content text-center">
                                    <div class="row items-push">
                                        <div class="col-xs-6">
                                            <div class="h3 push-5"><?php
                                            $con=mysqli_connect("localhost","root","","ideal");                                
                                            $result = mysqli_query($con,"SELECT sum(cost) FROM market WHERE user_id = '$_SESSION[u_id]'");
                                            while($row = mysqli_fetch_array($result)){
                                            echo "$row[0]";
                                            }
                                              ?><i class="fa fa-euro"></i></div>
                                            <div class="h5 font-w300 text-muted">Agores</div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="h3 push-5">
                                                <?php
                                                $con=mysqli_connect("localhost","root","","ideal");
                                                $result = mysqli_query($con,"SELECT credits FROM user WHERE user_id = '$_SESSION[u_id]'");
                                                while($row = mysqli_fetch_array($result)){
                                                echo "$row[0]";
                                                }
                                                ?><i class="fa fa-euro"></i></div>
                                            <div class="h5 font-w300 text-muted">Epistrofes</div>
                                        </div>
                                    </div>
                                </div>
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
                            
                                <div  class="block-content block-content-full text-center">
                                    <div>
                                        <img class="img-avatar img-avatar96" src="assets/img/avatars/qr2.png" alt="">
                                    </div>
                                    <div class="h4 font-w300 text-muted"><?php
                                    
                                            echo $_SESSION['u_first'];       
                                     
                                            ?></div>
                                </div>
                                
                                <div class="block-content">
                                    <div class="row items-push text-center">
                                        
                                       
                                            <h4><div class="push-"><i class="fa fa-address-card-o"></i>ID</div></h4>
                                            <div class="h4 font-w300 text-muted">
                                            <?php
                                    
                                            echo $_SESSION['u_id'];       
                                     
                                            ?></div>
                                        
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
                                
                                <li><a href="base_pages_login.php"   ><i class="si si-logout"></i><span class="sidebar-mini-hide">Log out</span></a></li>
                                
                                
                                
                                
                                
                                
                                
                            
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

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                                
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">Profile</li>
                                <li>
                                    <a tabindex="-1" href="base_pages_inbox.html">
                                        <i class="si si-envelope-open pull-right"></i>
                                        <span class="badge badge-primary pull-right">3</span>Inbox
                                    </a>
                                </li>
                                
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-settings pull-right"></i>Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Actions</li>
                                <li>
                                    <a tabindex="-1" href="base_pages_lock.html">
                                        <i class="si si-lock pull-right"></i>Lock Account
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="base_pages_login.html">
                                        <i class="si si-logout pull-right"></i>Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
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
            <!-- END Header -->
            
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                
                <!-- END Page Header -->

                <!-- Stats -->
                <div class="content bg-white border-b">
                    
                </div>
                <!-- END Stats -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                       
                        <div class="col-lg-6">
                            <!-- Borderless Table -->
                            <div class="block">
                                <div class="block-header">
                                    <div class="block-options">
                                       
                                    </div>
                                    <h3 class="block-title">Istoriko Agorwn</h3>
                                </div>
                                <div class="block-content">
                                    <table class="table table-bordered table-striped js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 15%;">Store</th>
                                        <th class="text-center" style="width: 15%;">Cost</th>
                                        <th class="text-center" style="width: 15%;">Date</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $con=mysqli_connect("localhost","root","","ideal");
                                
                                $result = mysqli_query($con,"SELECT * FROM market WHERE user_id = '$_SESSION[u_id]'");
                                while($row = mysqli_fetch_array($result))
                                   {

                                    echo "<tr >";
                                    echo "   <td class='text-center' >" . $row['store_name'] . "</td>";
                                    echo "   <td class='text-center' >" . $row['cost'] . "</td>";
                                    echo "   <td class='text-center' >" . $row['datet'] . "</td>";
                                   
                                    
                                        
                                        
                                   echo " </tr>";}
                                    ?>
                                </tbody>
                            </table>
                                </div>
                
                
                
                            </div>
                            <!-- END Borderless Table -->
                        </div>
                    </div>
                    
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps Block -->
                    <div class="block block-themed block-transparent">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Apps</h3>
                        </div>
                        <div class="block-content">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="base_pages_dashboard.html">
                                        <div class="block-content text-white bg-default">
                                            <i class="si si-speedometer fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Backend</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="frontend_home.html">
                                        <div class="block-content text-white bg-modern">
                                            <i class="si si-rocket fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Frontend</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Apps Block -->
                </div>
            </div>
        </div>
        <!-- END Apps Modal -->

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

        <!-- Page Plugins -->
        <script src="assets/js/plugins/slick/slick.min.js"></script>
        <script src="assets/js/plugins/chartjs/Chart.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_pages_dashboard.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>
    </body>
</html>