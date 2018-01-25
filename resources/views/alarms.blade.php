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
                <li class="active">Alarmas</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    Alarmas
                    <small>
                        <i class="fa fa-angle-right"></i>
                        Activas
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
            <h5 class="row-title"><i class="typcn typcn-tag"></i>Alarmas</h5>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget  radius-bordered">
                        <div class="widget-header">
                            <span class="widget-caption">Gestores de Red</span>
                        </div>
                        <div class="widget-body">
                            <div class="docs-example">
                                <ul class="nav nav-tabs tabs-flat">
                                    <li class="active"><a href="#prime-tab" data-toggle="tab">Prime</a></li>
                                    <li class=""><a href="#cambium-tab" data-toggle="tab">Cambium</a></li>
                                    <li class=""><a href="#neteco-tab" data-toggle="tab">Neteco</a></li>
                                </ul>

                                <form id="accountForm" method="post" class="form-horizontal bv-form" novalidate="novalidate">
                                    <div class="tab-content tabs-flat">
                                        <!-- PRIME TAB -->
                                        <div class="tab-pane active" id="prime-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="well with-header with-footer">
                                                        <!--bordered-yellow-->
                                                        <div class="header bordered-sky">
                                                            Alarmas por severidad
                                                        </div>
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Id Trap
                                                                    </th>
                                                                    <th>
                                                                        Severidad
                                                                    </th>
                                                                    <th>
                                                                        Fecha Inicio
                                                                    </th>
                                                                    <th>
                                                                        Fecha Fin
                                                                    </th>
                                                                    <th>
                                                                        Elemento Afectado
                                                                    </th>
                                                                    <th>
                                                                        Descripción
                                                                    </th>
                                                                    <th>
                                                                        Estado
                                                                    </th>
                                                                    <th>
                                                                        Nro. Reparación
                                                                    </th>
                                                                    <th>
                                                                        Motivo Exclusión
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!--class="success" -->
                                                                <!--class="warning" -->
                                                                <!--class="info" -->
                                                                <!--class="danger" -->
                                                                @foreach ($alarmsPrime as $alarm)
                                                                    <tr class="success">
                                                                        <td>
                                                                            {{ $alarm['id'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['severidad'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['fechaInicio'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['fechaFin'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['elementoAfectado'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['descripcion'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['estado'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['nroReparacion'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['motivoExclusion'] }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                <tr class="danger">
                                                                    <td>
                                                                        1
                                                                    </td>
                                                                    <td>
                                                                        Minor
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>

                                                        <div class="footer">
                                                            <code>alarmas</code>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="cambium-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="well with-header with-footer">
                                                        <!--bordered-yellow-->
                                                        <div class="header bordered-sky">
                                                            Alarmas por severidad
                                                        </div>
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Id Trap
                                                                    </th>
                                                                    <th>
                                                                        Severidad
                                                                    </th>
                                                                    <th>
                                                                        Fecha Inicio
                                                                    </th>
                                                                    <th>
                                                                        Fecha Fin
                                                                    </th>
                                                                    <th>
                                                                        Elemento Afectado
                                                                    </th>
                                                                    <th>
                                                                        Descripción
                                                                    </th>
                                                                    <th>
                                                                        Estado
                                                                    </th>
                                                                    <th>
                                                                        Nro. Reparación
                                                                    </th>
                                                                    <th>
                                                                        Motivo Exclusión
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @foreach ($alarmsCambium as $alarm)
                                                                    <tr class="success">
                                                                        <td>
                                                                            {{ $alarm['id'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['severidad'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['fechaInicio'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['fechaFin'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['elementoAfectado'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['descripcion'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['estado'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['nroReparacion'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['motivoExclusion'] }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach

                                                                <tr class="danger">
                                                                    <td>
                                                                        4
                                                                    </td>
                                                                    <td>
                                                                        Critical
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>

                                                        <div class="footer">
                                                            <code>alarmas</code>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="neteco-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="well with-header with-footer">
                                                        <!--bordered-yellow-->
                                                        <div class="header bordered-sky">
                                                            Alarmas por severidad
                                                        </div>
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Id Trap
                                                                    </th>
                                                                    <th>
                                                                        Severidad
                                                                    </th>
                                                                    <th>
                                                                        Fecha Inicio
                                                                    </th>
                                                                    <th>
                                                                        Fecha Fin
                                                                    </th>
                                                                    <th>
                                                                        Elemento Afectado
                                                                    </th>
                                                                    <th>
                                                                        Descripción
                                                                    </th>
                                                                    <th>
                                                                        Estado
                                                                    </th>
                                                                    <th>
                                                                        Nro. Reparación
                                                                    </th>
                                                                    <th>
                                                                        Motivo Exclusión
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @foreach ($alarmsNeteco as $alarm)
                                                                    <tr class="success">
                                                                        <td>
                                                                            {{ $alarm['id'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['severidad'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['fechaInicio'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['fechaFin'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['elementoAfectado'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['descripcion'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['estado'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['nroReparacion'] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $alarm['motivoExclusion'] }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach

                                                                <tr class="danger">
                                                                    <td>
                                                                        4
                                                                    </td>
                                                                    <td>
                                                                        Critical
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                    <td>
                                                                        Column heading
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>

                                                        <div class="footer">
                                                            <code>alarmas</code>
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