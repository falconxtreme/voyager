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

                                <tr class="active">
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

                                <tr class="success">
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        Mayor
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

                                <tr class="warning">
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        warning
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
        <!-- /Page Body -->
    </div>
    
@endsection