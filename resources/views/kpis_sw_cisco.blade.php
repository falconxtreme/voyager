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
                <li class="active">Calidad por Switch</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    Gráficas
                    <small>
                        <i class="fa fa-angle-right"></i>
                        Calidad por Switch
                    </small>
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
            <h5 class="row-title"><i class="typcn typcn-tag"></i>Filtro</h5>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget flat radius-bordered">
                        <div class="widget-header bg-blue">
                            <span class="widget-caption"></span>
                        </div>
                        <div class="widget-body">
                            <div id="registration-form">
                                <form role="form">
                                    <div class="form-title">
                                        <div class="row">
                                            <div class="col-sm-4">
                                            </div>
                                            <div class="col-sm-6">
                                            </div>
                                            <div class="col-sm-2">
                                                <!--
                                                <button class="btn btn-danger tooltip-danger" data-toggle="tooltip" data-placement="top" data-original-title="Danger Tooltip">Danger</button>
                                                 <a href="javascript:void(0);" class="btn btn-default  btn-circle btn-xs"><i class="glyphicon glyphicon-ok"></i></a>
                                                 <a href="javascript:void(0);" class="btn btn-info  btn-circle btn-xs tooltip-info" data-toggle="tooltip" data-placement="top" data-original-title="Info Tooltip"><i class="glyphicon glyphicon-retweet"></i></a>
                                                 -->
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" id="codigoUbigeoInput" placeholder="Código de Ubigeo">
                                                    <i class="fa fa-globe"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                             <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" id="departamentoInput" placeholder="Departamento">
                                                    <i class="fa fa-globe"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" id="provincaInput" placeholder="Provincia">
                                                    <i class="fa fa-globe"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" id="distritoInput" placeholder="Distrito">
                                                    <i class="fa fa-globe"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" id="nodoInput" placeholder="Nodo">
                                                    <i class="glyphicon glyphicon-home circular"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" id="dispNodoInput" placeholder="Dispositivo Nodo">
                                                    <i class="fa fa-laptop"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label >Fecha y Hora Inicio</label>
                                        </div>
                                        <div class="col-sm-3">
                                        </div>
                                        <div class="col-sm-3">
                                            <label >Fecha y Hora Fin</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input class="form-control" id="timepicker1" type="text">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input class="form-control date-picker" id="id-date-picker-2" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input class="form-control" id="timepicker2" type="text">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        
                                    </div>

                                    <div class="form-group">
                                        
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="buttons-preview">
                                                <a href="javascript:void(InitiateFlotSelectableChartPotenciaSWCisco.init());" class="btn btn-azure">Potencia Tx</a>
                                                <a href="javascript:void(0);" class="btn btn-azure">Potencia Rx</a>
                                                <a href="javascript:void(0);" class="btn btn-azure">Valores Pico Potencia óptica</a>
                                                <a href="javascript:void(0);" class="btn btn-azure">Interrupciones</a>
                                                <a href="javascript:void(0);" class="btn btn-azure">Tasa de Transmisión de bits</a>
                                                <a href="javascript:void(0);" class="btn btn-azure">Pérdida de paquetes</a>
                                                <a href="javascript:void(0);" class="btn btn-azure">Velocidad de subida</a>
                                                <a href="javascript:void(0);" class="btn btn-azure">Velocidad de bajada</a>
                                                <a href="javascript:void(0);" class="btn btn-azure">CPU</a>
                                                <a href="javascript:void(0);" class="btn btn-azure">Memoria</a>
                                                <a href="javascript:void(0);" class="btn btn-azure">Temperatura</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        
                                    </div>

                                    <div class="form-group"></div>
                                    <div class="row">
                                        <div class="col-xs-10 col-md-10 col-lg-10">
                                            <div class="widget">
                                                <div class="widget-header">
                                                    <span class="widget-caption">Potencia</span>
                                                    <div class="widget-buttons">
                                                        <a href="#" data-toggle="maximize">
                                                            <i class="fa fa-expand"></i>
                                                        </a>
                                                        <a href="#" data-toggle="collapse">
                                                            <i class="fa fa-minus"></i>
                                                        </a>
                                                        <a href="#" data-toggle="dispose">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="widget-body">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div id="selectable-chart" class="chart chart-lg"></div>

                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /Page Body -->
    </div>
    
@endsection