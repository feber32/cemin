<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Centro de Salud Santa Cruz</title>

    <!-- Favicons-->
    <link rel="icon" href="<?php echo base_url(); ?>images/1.ico" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="<?php echo base_url(); ?>css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen (Layout-2)-->
    <link href="<?php echo base_url(); ?>css/layouts/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="<?php echo base_url(); ?>css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?php echo base_url(); ?>js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">



</head>

<body>
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color">
            <div class="nav-wrapper">
                <ul class="left">
                    <li>
                        <h1 class="logo-wrapper">
                            <a href="index.html" class="brand-logo darken-1" style="padding-top: 5px;padding-left: 80px;">
                                <img src="<?php echo base_url(); ?>images/4.png" alt="materialize logo " style="    height: 50px;    width: 50px;    margin-right: 15px;    margin-top: 1px;">
                                <img src="<?php echo base_url(); ?>images/5.png" alt="materialize logo">
                            </a>
                            <span class="logo-text">Materialize</span>
                        </h1>
                    </li>
                </ul>

                <ul class="right hide-on-med-and-down">

                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>

                        </a>
                    </li>
                    <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                    </li>
                </ul>

                <!-- notifications-dropdown -->
                <ul id="notifications-dropdown" class="dropdown-content">
                    <li>
                        <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
  
<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="<?php echo base_url(); ?>images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                </li>
                                <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                </li>
                                <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                </li>
                                <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                </li>
                            </ul>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                            <p class="user-roal">Administrator</p>
                        </div>
                    </div>
                </li>


                <li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">Menu</p></li>
                <li class="bold active"><a href="javascript:void(0);" onClick="f_load_iframe('1');" class="waves-effect waves-cyan active"><i class="mdi-action-dashboard"></i> Inicio</a></li>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan "><i class="mdi-action-view-carousel"></i> Paciente</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class=""><a href="javascript:void(0);" onClick="f_load_iframe('1');">Nuevo</a> </li>
                                    <li class=""><a href="javascript:void(0);" onClick="f_load_iframe('1');">Buscar</a> </li>
                                    <li class=""><a href="javascript:void(0);" onClick="f_load_iframe('1');">Citas</a> </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="bold"><a href="javascript:void(0);" onClick="f_load_iframe('1');" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a></li>
                <li class="bold"><a href="javascript:void(0);" onClick="f_load_iframe('1');" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calender</a> </li>

                <li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">Administracion</p></li>
                <li><a href="javascript:void(0); " onClick="f_load_iframe('1');"><i class="mdi-action-verified-user"></i> Usuarios  <span class="new badge"></span></a> </li>
                <li><a href="javascript:void(0);  " onClick="f_load_iframe('1');"><i class="mdi-image-grid-on"></i> Grid</a>   </li>


                <li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">Root</p></li>
                <li><a href="javascript:void(0);"  onClick="f_load_iframe('1');"><i class="mdi-action-verified-user"></i> Angular UI  <span class="new badge"></span></a>                </li>
                <li><a href="javascript:void(0); " onClick="f_load_iframe('1');"><i class="mdi-image-grid-on"></i> Grid</a>                </li>



            </ul>
            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--start container-->
            <div class="container-fluid">



                <div class="embed-container">
                    <iframe id="haddyx"   src="apps/view_home.html"  frameborder="0"> </iframe>
                </div>





            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START RIGHT SIDEBAR NAV-->
        <aside id="right-sidebar-nav">
            <ul id="chat-out" class="side-nav rightside-navigation">
                <li class="li-hover">
                    <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                    <div id="right-search" class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <i class="mdi-action-search prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Search</label>
                            </div>
                        </form>
                    </div>
                </li>

            </ul>
        </aside>
        <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->



<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/plugins/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/materialize.min.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>


<!-- sparkline -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/plugins/sparkline/sparkline-script.js"></script>




<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/plugins.min.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom-script.js"></script>


<script type="text/javascript" >


    function f_load_iframe(x){

        console.log(x);
    }



</script>


</body>

</html>
