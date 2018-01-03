@extends('main')

@section('content')
    <div class="page-content" >
         <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">Home</a>
                </li>
                <li class="active">Dashboard</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    Dashboard
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>
                <a class="refresh" id="refresh-toggler" href="">
                    <i class="glyphicon glyphicon-refresh"></i>
                </a>
                <a class="fullscreen" id="fullscreen-toggler" href="#">
                    <i class="glyphicon glyphicon-fullscreen"></i>
                </a>
            </div>
            <!--Header Buttons End-->
        </div>
        <!-- /Page Header -->
        <!-- Page Body -->
        <div class="page-body">
            <h5 class="row-title"><i class="typcn typcn-tag"></i>Prime</h5>
        	<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-themesecondary">
                                    <div class="databox-piechart">
                                        <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="50" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">10%</span></div>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <span class="databox-number themesecondary">28</span>
                                    <div class="databox-text darkgray">Nuevas Alarmas Críticas</div>
                                    <div class="databox-stat themesecondary radius-bordered">
                                        <i class="stat-icon icon-lg fa fa-tasks"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-themethirdcolor">
                                    <div class="databox-piechart">
                                        <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="15" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.2)"><span class="white font-90">15%</span></div>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <span class="databox-number themethirdcolor">5</span>
                                    <div class="databox-text darkgray">Nuevas Alarmas Major</div>
                                    <div class="databox-stat themethirdcolor radius-bordered">
                                        <i class="stat-icon  icon-lg fa fa-tasks"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-palegreen">
                                    <div class="databox-piechart">
                                        <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">20%</span></div>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <span class="databox-number green">7</span>
                                    <div class="databox-text darkgray">Nuevas Alarmas Minor</div>
                                    <div class="databox-state bg-palegreen">
                                        <i class="stat-icon  icon-lg fa fa-tasks"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-themeprimary">
                                    <div class="databox-piechart">
                                        <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">30%</span></div>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <span class="databox-number themeprimary">9</span>
                                    <div class="databox-text darkgray">Nuevas Alarmas Warning</div>
                                    <div class="databox-state bg-themeprimary">
                                        <i class="stat-icon  icon-lg fa fa-tasks"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left no-padding">
                                    <img src="assets/img/avatars/John-Smith.jpg" style="width:65px; height:65px;">
                                </div>
                                <div class="databox-right padding-top-20">
                                    <div class="databox-stat palegreen">
                                        <i class="stat-icon icon-xlg fa fa-phone"></i>
                                    </div>
                                    <div class="databox-text darkgray">JOHN SMITH</div>
                                    <div class="databox-text darkgray">TOP RESELLER</div>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>

            <h5 class="row-title"><i class="typcn typcn-tag"></i>Cambium</h5>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-themesecondary">
                                    <div class="databox-piechart">
                                        <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="50" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">10%</span></div>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <span class="databox-number themesecondary">28</span>
                                    <div class="databox-text darkgray">Nuevas Alarmas Críticas</div>
                                    <div class="databox-stat themesecondary radius-bordered">
                                        <i class="stat-icon icon-lg fa fa-tasks"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-themethirdcolor">
                                    <div class="databox-piechart">
                                        <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="15" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.2)"><span class="white font-90">15%</span></div>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <span class="databox-number themethirdcolor">5</span>
                                    <div class="databox-text darkgray">Nuevas Alarmas Major</div>
                                    <div class="databox-stat themethirdcolor radius-bordered">
                                        <i class="stat-icon  icon-lg fa fa-tasks"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-palegreen">
                                    <div class="databox-piechart">
                                        <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">20%</span></div>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <span class="databox-number green">7</span>
                                    <div class="databox-text darkgray">Nuevas Alarmas Minor</div>
                                    <div class="databox-state bg-palegreen">
                                        <i class="stat-icon  icon-lg fa fa-tasks"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-themeprimary">
                                    <div class="databox-piechart">
                                        <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">30%</span></div>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <span class="databox-number themeprimary">9</span>
                                    <div class="databox-text darkgray">Nuevas Alarmas Warning</div>
                                    <div class="databox-state bg-themeprimary">
                                        <i class="stat-icon  icon-lg fa fa-tasks"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="row-title"><i class="typcn typcn-tag"></i>Neteco</h5>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-themesecondary">
                                    <div class="databox-piechart">
                                        <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="50" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">10%</span></div>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <span class="databox-number themesecondary">28</span>
                                    <div class="databox-text darkgray">Nuevas Alarmas Críticas</div>
                                    <div class="databox-stat themesecondary radius-bordered">
                                        <i class="stat-icon icon-lg fa fa-tasks"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-themethirdcolor">
                                    <div class="databox-piechart">
                                        <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="15" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.2)"><span class="white font-90">15%</span></div>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <span class="databox-number themethirdcolor">5</span>
                                    <div class="databox-text darkgray">Nuevas Alarmas Major</div>
                                    <div class="databox-stat themethirdcolor radius-bordered">
                                        <i class="stat-icon  icon-lg fa fa-tasks"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-palegreen">
                                    <div class="databox-piechart">
                                        <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">20%</span></div>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <span class="databox-number green">7</span>
                                    <div class="databox-text darkgray">Nuevas Alarmas Minor</div>
                                    <div class="databox-state bg-palegreen">
                                        <i class="stat-icon  icon-lg fa fa-tasks"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-themeprimary">
                                    <div class="databox-piechart">
                                        <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">30%</span></div>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <span class="databox-number themeprimary">9</span>
                                    <div class="databox-text darkgray">Nuevas Alarmas Warning</div>
                                    <div class="databox-state bg-themeprimary">
                                        <i class="stat-icon  icon-lg fa fa-tasks"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Body -->
    </div>
@endsection


