<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel Voyager</title>

        <meta name="description" content="Dashboard" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--Basic Styles-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">-->

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/weather-icons.min.css') }}" rel="stylesheet">

         <!--Beyond styles-->
         <link href="{{ asset('css/beyond.min.css') }}" rel="stylesheet">
         <link href="{{ asset('css/demo.min.css') }}" rel="stylesheet">
         <link href="{{ asset('css/typicons.min.css') }}" rel="stylesheet">
         <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
         <link id="skin-link" href="" rel="stylesheet" type="text/css" />
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!--Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
        <script src="{{ asset('js/skins.min.js') }}"></script>
    </head>
    <body>
        <!-- Loading Container -->
        <div class="loading-container">
            <div class="loader"></div>
        </div>

        <!-- Navbar -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="navbar-container">
                    <!-- Navbar Barnd -->
                    <div class="navbar-header pull-left">
                        <a href="#" class="navbar-brand">
                            <small>
                                <!--<img src="assets/img/fitel-enlace.png" alt="FITEL" />-->
                                <img src="{{ asset('assets/img/fitel-enlace.png') }}" alt="FITEL">
                            </small>
                        </a>
                    </div>
                    <!-- /Navbar Barnd -->
                    <!-- Sidebar Collapse -->
                    <div class="sidebar-collapse" id="sidebar-collapse">
                        <i class="collapse-icon fa fa-bars"></i>
                    </div>
                    <!-- /Sidebar Collapse -->
                    <!-- Account Area and Settings -->
                    <div class="navbar-header pull-right">
                        <div class="navbar-account">
                            <ul class="account-area">
                                <li>
                                    <!--
                                    <a class=" dropdown-toggle" data-toggle="dropdown" title="Notifications" href="#">
                                        <i class="icon fa fa-warning"></i>
                                    </a>
                                    -->
                                    <!--Notification Dropdown-->
                                    <ul class="pull-right dropdown-menu dropdown-arrow dropdown-notifications">
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <div class="notification-icon">
                                                        <i class="fa fa-phone bg-themeprimary white"></i>
                                                    </div>
                                                    <div class="notification-body">
                                                        <span class="title">Skype meeting with Patty</span>
                                                        <span class="description">01:00 pm</span>
                                                    </div>
                                                    <div class="notification-extra">
                                                        <i class="fa fa-clock-o themeprimary"></i>
                                                        <span class="description">office</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <div class="notification-icon">
                                                        <i class="fa fa-check bg-darkorange white"></i>
                                                    </div>
                                                    <div class="notification-body">
                                                        <span class="title">Uncharted break</span>
                                                        <span class="description">03:30 pm - 05:15 pm</span>
                                                    </div>
                                                    <div class="notification-extra">
                                                        <i class="fa fa-clock-o darkorange"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <div class="notification-icon">
                                                        <i class="fa fa-gift bg-warning white"></i>
                                                    </div>
                                                    <div class="notification-body">
                                                        <span class="title">Kate birthday party</span>
                                                        <span class="description">08:30 pm</span>
                                                    </div>
                                                    <div class="notification-extra">
                                                        <i class="fa fa-calendar warning"></i>
                                                        <i class="fa fa-clock-o warning"></i>
                                                        <span class="description">at home</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <div class="notification-icon">
                                                        <i class="fa fa-glass bg-success white"></i>
                                                    </div>
                                                    <div class="notification-body">
                                                        <span class="title">Dinner with friends</span>
                                                        <span class="description">10:30 pm</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown-footer ">
                                            <span>
                                                Today, March 28
                                            </span>
                                            <span class="pull-right">
                                                10°c
                                                <i class="wi wi-cloudy"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <!--/Notification Dropdown-->
                                </li>
                                <li>
                                    <!--
                                    <a class="dropdown-toggle" data-toggle="dropdown" title="Mails" href="#">
                                        <i class="icon fa fa-envelope"></i>
                                        <span class="badge">3</span>
                                    </a>
                                    -->
                                    <!--Messages Dropdown-->
                                    <ul class="pull-right dropdown-menu dropdown-arrow dropdown-messages">
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/avatars/divyia.jpg" class="message-avatar" alt="Divyia Austin">
                                                <div class="message">
                                                    <span class="message-sender">
                                                        Divyia Austin
                                                    </span>
                                                    <span class="message-time">
                                                        2 minutes ago
                                                    </span>
                                                    <span class="message-subject">
                                                        Here's the recipe for apple pie
                                                    </span>
                                                    <span class="message-body">
                                                        to identify the sending application when the senders image is shown for the main icon
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/avatars/bing.png" class="message-avatar" alt="Microsoft Bing">
                                                <div class="message">
                                                    <span class="message-sender">
                                                        Bing.com
                                                    </span>
                                                    <span class="message-time">
                                                        Yesterday
                                                    </span>
                                                    <span class="message-subject">
                                                        Bing Newsletter: The January Issue‏
                                                    </span>
                                                    <span class="message-body">
                                                        Discover new music just in time for the Grammy® Awards.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/avatars/adam-jansen.jpg" class="message-avatar" alt="Divyia Austin">
                                                <div class="message">
                                                    <span class="message-sender">
                                                        Nicolas
                                                    </span>
                                                    <span class="message-time">
                                                        Friday, September 22
                                                    </span>
                                                    <span class="message-subject">
                                                        New 4K Cameras
                                                    </span>
                                                    <span class="message-body">
                                                        The 4K revolution has come over the horizon and is reaching the general populous
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--/Messages Dropdown-->
                                </li>
                                <li>
                                    <!--
                                    <a class="dropdown-toggle" data-toggle="dropdown" title="Tasks" href="#">
                                        <i class="icon fa fa-tasks"></i>
                                        <span class="badge">4</span>
                                    </a>
                                    -->
                                    <!--Tasks Dropdown-->
                                    <ul class="pull-right dropdown-menu dropdown-tasks dropdown-arrow ">
                                        <li class="dropdown-header bordered-darkorange">
                                            <i class="fa fa-tasks"></i>
                                            4 Tasks In Progress
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">Account Creation</span>
                                                    <span class="pull-right">65%</span>
                                                </div>

                                                <div class="progress progress-xs">
                                                    <div style="width:65%" class="progress-bar"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">Profile Data</span>
                                                    <span class="pull-right">35%</span>
                                                </div>

                                                <div class="progress progress-xs">
                                                    <div style="width:35%" class="progress-bar progress-bar-success"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">Updating Resume</span>
                                                    <span class="pull-right">75%</span>
                                                </div>

                                                <div class="progress progress-xs">
                                                    <div style="width:75%" class="progress-bar progress-bar-darkorange"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">Adding Contacts</span>
                                                    <span class="pull-right">10%</span>
                                                </div>

                                                <div class="progress progress-xs">
                                                    <div style="width:10%" class="progress-bar progress-bar-warning"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown-footer">
                                            <a href="#">
                                                See All Tasks
                                            </a>
                                            <button class="btn btn-xs btn-default shiny darkorange icon-only pull-right"><i class="fa fa-check"></i></button>
                                        </li>
                                    </ul>
                                    <!--/Tasks Dropdown-->
                                </li>
                                <li>
                                    <!--
                                    <a class="wave in" id="chat-link" title="Chat" href="#">
                                        <i class="icon glyphicon glyphicon-comment"></i>
                                    </a>
                                    -->
                                </li>
                                <li>
                                    <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                        <div class="avatar" title="View your public profile">
                                            <img src="assets/img/avatars/images.jpg">
                                        </div>
                                        <section>
                                            <h2><span class="profile"><span>Mario Valverde</span></span></h2>
                                        </section>
                                    </a>
                                    <!--Login Area Dropdown-->
                                    <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                        <li class="username"><a>Mario Valverde</a></li>
                                        <li class="email"><a>Mario.Valverde@live.com</a></li>
                                        <!--Avatar Area-->
                                        <li>
                                            <div class="avatar-area">
                                                <img src="assets/img/avatars/images.jpg" class="avatar">
                                                <span class="caption">Change Photo</span>
                                            </div>
                                        </li>
                                        <!--Avatar Area-->
                                        <li class="edit">
                                            <a href="profile.html" class="pull-left">Profile</a>
                                            <a href="#" class="pull-right">Setting</a>
                                        </li>
                                        <!--Theme Selector Area-->
                                        <li class="theme-area">
                                            <ul class="colorpicker" id="skin-changer">
                                                <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="assets/css/skins/blue.min.css"></a></li>
                                                <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="assets/css/skins/azure.min.css"></a></li>
                                                <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="assets/css/skins/teal.min.css"></a></li>
                                                <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="assets/css/skins/green.min.css"></a></li>
                                                <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="assets/css/skins/orange.min.css"></a></li>
                                                <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="assets/css/skins/pink.min.css"></a></li>
                                                <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="assets/css/skins/darkred.min.css"></a></li>
                                                <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="assets/css/skins/purple.min.css"></a></li>
                                                <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="assets/css/skins/darkblue.min.css"></a></li>
                                                <li><a class="colorpick-btn" href="#" style="background-color:#585858;" rel="assets/css/skins/gray.min.css"></a></li>
                                                <li><a class="colorpick-btn" href="#" style="background-color:#474544;" rel="assets/css/skins/black.min.css"></a></li>
                                                <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="assets/css/skins/deepblue.min.css"></a></li>
                                            </ul>
                                        </li>
                                        <!--/Theme Selector Area-->
                                        <li class="dropdown-footer">
                                            <a href="login.html">
                                                Sign out
                                            </a>
                                        </li>
                                    </ul>
                                    <!--/Login Area Dropdown-->
                                </li>
                                <!-- /Account Area -->
                                <!--Note: notice that setting div must start right after account area list.
                                no space must be between these elements-->
                                <!-- Settings -->
                            </ul><div class="setting">
                                <a id="btn-setting" title="Setting" href="#">
                                    <i class="icon glyphicon glyphicon-cog"></i>
                                </a>
                            </div><div class="setting-container">
                                <label>
                                    <input type="checkbox" id="checkbox_fixednavbar">
                                    <span class="text">Fixed Navbar</span>
                                </label>
                                <label>
                                    <input type="checkbox" id="checkbox_fixedsidebar">
                                    <span class="text">Fixed SideBar</span>
                                </label>
                                <label>
                                    <input type="checkbox" id="checkbox_fixedbreadcrumbs">
                                    <span class="text">Fixed BreadCrumbs</span>
                                </label>
                                <label>
                                    <input type="checkbox" id="checkbox_fixedheader">
                                    <span class="text">Fixed Header</span>
                                </label>
                            </div>
                            <!-- Settings -->
                        </div>
                    </div>
                    <!-- /Account Area and Settings -->
                </div>
            </div>
        </div>
        <!-- /Navbar -->

        <!-- Main Container -->
        <div class="main-container container-fluid">
            <!-- Page Container -->
            <div class="page-container">
                <!-- Page Sidebar -->
                <div class="page-sidebar" id="sidebar">
                    <!-- Page Sidebar Header-->
                    <div class="sidebar-header-wrapper">
                        <input type="text" class="searchinput" />
                        <i class="searchicon fa fa-search"></i>
                        <div class="searchhelper">Buscar</div>
                    </div>
                    <!-- /Page Sidebar Header -->
                    <!-- Sidebar Menu -->
                    {{ menu('main','menu_custom') }}
                    <!-- /Sidebar Menu -->
                </div>
                <!-- /Page Sidebar -->

                <!-- Page Content -->
                @yield('content')
                <!-- /Page Content -->
            </div>
            <!-- /Page Container -->
            <!-- Main Container -->
            
        </div>

        <!--Basic Scripts-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!--Beyond Scripts-->
        <script src="{{ asset('js/beyond.js') }}"></script>


        <!--Bootstrap Date Picker-->
        <script src="{{ asset('js/datetime/bootstrap-datepicker.js') }}"></script>

        <!--Bootstrap Time Picker-->
        <script src="{{ asset('js/datetime/bootstrap-timepicker.js') }}"></script>

        <!--Jquery Select2-->
        <script src="{{ asset('js/select2/select2.js') }}"></script>

        <!--MORRIS JS for Charts-->
        <script src="{{ asset('js/charts/morris/raphael-2.0.2.min.js') }}"></script>
        <script src="{{ asset('js/charts/morris/morris.js') }}"></script>
        <script src="{{ asset('js/charts/morris/morris-init.js') }}"></script>

        <!--FLOT JS for Charts-->
        <script src="{{ asset('js/charts/flot/jquery.flot.js') }}"></script>

        <script src="{{ asset('js/charts/flot/jquery.flot.orderBars.js') }}"></script>
        <script src="{{ asset('js/charts/flot/jquery.flot.tooltip.js') }}"></script>
        <script src="{{ asset('js/charts/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('js/charts/flot/jquery.flot.selection.js') }}"></script>

        <script src="{{ asset('js/charts/flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('js/charts/flot/flot-init.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset('js/subsistema.js') }}"></script>

        <script>
            $( document ).ready(function() {
                // Handler for .ready() called.

                //--Bootstrap Date Picker--
                $('.date-picker').datepicker();

                //--Bootstrap Time Picker--
                $('#timepicker1').timepicker();
                $('#timepicker2').timepicker();

                $("#e2").select2({
                    placeholder: "Tipo de Reporte",
                    allowClear: true
                });

                $("#ddlMedioReporte").select2({
                    placeholder: "Medio de Reporte",
                    allowClear: true
                });
            });
            

        </script>

        <script type="text/javascript">
            $(window).bind("load", function () {

                /*Sets Themed Colors Based on Themes*/
                themeprimary = getThemeColorFromCss('themeprimary');
                themesecondary = getThemeColorFromCss('themesecondary');
                themethirdcolor = getThemeColorFromCss('themethirdcolor');
                themefourthcolor = getThemeColorFromCss('themefourthcolor');
                themefifthcolor = getThemeColorFromCss('themefifthcolor');

                //InitiateAreaChart.init();
                //InitiateBarChart.init();
                //InitiateDonutChart.init();
                
                //InitiateLineChartLatencia.init();
                
                //InitiateLineChart2.init();

                //InitiateStackedChartLatencia.init();

                InitiateFlotSelectableChartLatencia.init();
            });
        </script>
    </body>
</html>
