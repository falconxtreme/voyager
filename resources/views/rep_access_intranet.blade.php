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
                <li class="active">Reportes de Acceso a intranet</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    Reportes
                    <small>
                        <i class="fa fa-angle-right"></i>
                        Reportes de acceso a intranet
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
                                            <div class="col-sm-12">
                                                <a class="btn btn-blue" href="javascript:void(0);">Diario de Volumen de Tráfico</a>&nbsp;
                                                 <a class="btn btn-blue" href="javascript:void(0);">Mensual de Volumen de Tráfico</a>&nbsp;
                                                 <a class="btn btn-blue" href="javascript:void(0);">Uso de Ancho de Banda</a>&nbsp;
                                                <!-- 
                                                <select id="e2" multiple="multiple" style="width: 100%;">
                                                    <option value="RD" />Diario de Volumen de Tráfico
                                                    <option value="RM" />Mensual de Volumen de Tráfico
                                                    <option value="UAB" />Uso de Ancho de Banda
                                                    <option value="PVT" />Picos de Volumen de Tráfico
                                                    <option value="SES" />Sesiones
                                                </select>
                                                -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                 <a class="btn btn-blue" href="javascript:void(0);">Picos de Volumen de Tráfico</a>&nbsp;
                                                 <a class="btn btn-blue" href="javascript:void(0);">Sesiones</a>
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
                                                    <input type="text" class="form-control" id="beneficiarioInput" placeholder="Beneficiario">
                                                    <i class="glyphicon glyphicon-home circular"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" id="dispBeneficiarioInput" placeholder="Dispositivo Beneficiario">
                                                    <i class="fa fa-laptop"></i>
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
                                        <div class="col-xs-4 col-md-4">
                                            <button type="submit" class="btn btn-blue">Filtrar</button>    
                                        </div>
                                        <div class="col-xs-4 col-md-4">
                                        </div>
                                        <div class="col-xs-4 col-md-4">
                                            <div class="btn-group">
                                                <a class="btn btn-success" href="javascript:void(0);">Exportar</a>
                                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-download"></i></a>
                                                <ul class="dropdown-menu dropdown-success">
                                                    <li>
                                                        <a href="javascript:void(0);">CSV</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">XLS</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="well with-header with-footer">
                                                <div class="header bordered-success">
                                                    Resultado
                                                </div>
                                                <div class="table-scrollable">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead class="bordered-blueberry">
                                                            <tr>
                                                                <th scope="col" style="width:450px !important">
                                                                    Column header 1
                                                                </th>
                                                                <th scope="col">
                                                                    Column header 2
                                                                </th>
                                                                <th scope="col">
                                                                    Column header 3
                                                                </th>
                                                                <th scope="col">
                                                                    Column header 4
                                                                </th>
                                                                <th scope="col">
                                                                    Column header 5
                                                                </th>
                                                                <th scope="col">
                                                                    Column header 6
                                                                </th>
                                                                <th scope="col">
                                                                    Column header 7
                                                                </th>
                                                                <th scope="col">
                                                                    Column header 8
                                                                </th>
                                                                <th scope="col">
                                                                    Column header 9
                                                                </th>
                                                                <th scope="col">
                                                                    Column header 10
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                                <td>
                                                                    Table data
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="footer">
                                                    <code>Resultado</code>
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



