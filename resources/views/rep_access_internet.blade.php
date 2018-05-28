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
                <li class="active">Reportes de Acceso a internet</li>
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
                        Reportes de acceso a internet
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
                                <form action="/rep-access-internet/filter" method="post" role="form">
                                    <div class="form-title">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-sm-12">
                                                 <a class="btn btn-blue" href="javascript:void(0);">Diario de Volumen de Tráfico</a>&nbsp;
                                                 <a class="btn btn-blue" href="javascript:void(0);">Mensual de Volumen de Tráfico</a>&nbsp;
                                                 <a class="btn btn-blue" href="javascript:void(0);">Uso de Ancho de Banda</a>&nbsp;
                                                 <a class="btn btn-blue" href="javascript:void(0);">Web más visitadas</a>
                                                <!-- 
                                                <select id="e2" multiple="multiple" style="width: 100%;">
                                                    <option value="RD" />Diario de Volumen de Tráfico
                                                    <option value="RM" />Mensual de Volumen de Tráfico
                                                    <option value="UAB" />Uso de Ancho de Banda
                                                    <option value="WMV" />Web más visitadas
                                                    <option value="PVT" />Picos de Volumen de Tráfico
                                                    <option value="SES" />Sesiones
                                                </select>
                                                -->
                                            </div>
                                            <!--
                                            <div class="col-sm-6">
                                            </div>
                                            <div class="col-sm-2">
                                                
                                                <button class="btn btn-danger tooltip-danger" data-toggle="tooltip" data-placement="top" data-original-title="Danger Tooltip">Danger</button>
                                                 <a href="javascript:void(0);" class="btn btn-default  btn-circle btn-xs"><i class="glyphicon glyphicon-ok"></i></a>
                                                 <a href="javascript:void(0);" class="btn btn-info  btn-circle btn-xs tooltip-info" data-toggle="tooltip" data-placement="top" data-original-title="Info Tooltip"><i class="glyphicon glyphicon-retweet"></i></a>
                                                 
                                            </div>
                                            -->
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
                                                    <input type="text" class="form-control" name="codigoUbigeoInput" placeholder="Código de Ubigeo" maxlength="6">
                                                    <i class="fa fa-globe"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                             <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <!-- 
                                                        <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-globe"></i></a>
                                                    -->
                                                    <div class="btn-group">
                                                        <a class="btn btn-success" href="javascript:void(0);" data-toggle="dropdown">Departamento</a>
                                                        <ul class="dropdown-menu dropdown-success">
                                                            @foreach ($departments as $department)
                                                                <li>
                                                                    <a href="/rep-access-internet/{{ $department['idDepartamento'] }}-{{ $department['departamento'] }}">{{ $department['departamento'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>

                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="hidden" name="idDepartamentoInput" value="{{$idDepartamento}}">
                                                    <input type="text" class="form-control" name="departamentoInput" placeholder="Departamento" readonly="true" value="{{$desDepartamento}}">
                                                    <i class="fa fa-globe"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <!--
                                                    
                                                    <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-globe"></i></a>
                                                    -->

                                                    <div class="btn-group">
                                                        <a class="btn btn-success" href="javascript:void(0);" data-toggle="dropdown">Provincia</a>
                                                        
                                                        <ul class="dropdown-menu dropdown-success">
                                                            @foreach ($provinces as $province)
                                                                <li>
                                                                    <a href="/rep-access-internet/department/{{$idDepartamento}}-{{$desDepartamento}}-{{ $province['idProvincia'] }}-{{ $province['provincia'] }}">{{ $province['provincia'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="hidden" name="idProvincaInput" value="{{$idProvincia}}">
                                                    <input type="text" class="form-control" name="provincaInput" placeholder="Provincia" readonly="true" value="{{$desProvincia}}">
                                                    <i class="fa fa-globe"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <!--
                                                    <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-globe"></i></a>


                                                    -->

                                                    <div class="btn-group">
                                                        <a class="btn btn-success" href="javascript:void(0);" data-toggle="dropdown">Distrito</a>
                                                        <ul class="dropdown-menu dropdown-success">
                                                            @foreach ($districts as $district)
                                                                <li>
                                                                    <a href="javascript:setDistrict('{{ $district['idDistrito'] }}', '{{ $district['distrito'] }}');"
                                                                    >{{ $district['distrito'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="hidden" name="idDistritoInput" id="idDistritoInput" >
                                                    <input type="text" class="form-control" name="distritoInput" id="distritoInput" placeholder="Distrito" readonly="true" >
                                                    <i class="fa fa-globe"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" name="beneficiarioInput" placeholder="Beneficiario">
                                                    <i class="glyphicon glyphicon-home circular"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" name="dispBeneficiarioInput" placeholder="Dispositivo Beneficiario">
                                                    <i class="fa fa-laptop"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" name="nodoInput" placeholder="Nodo">
                                                    <i class="glyphicon glyphicon-home circular"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" name="dispNodoInput" placeholder="Dispositivo Nodo">
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
                                                <input class="form-control date-picker" name="id-date-picker-1" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input class="form-control" name="timepicker1" id="timepicker1" type="text">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input class="form-control date-picker" name="id-date-picker-2" id="id-date-picker-2" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input class="form-control" name="timepicker2" id="timepicker2" type="text">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    @if($errors->any())
                                        <div class="alert alert-danger" role="alert">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    
                                    <div class="row">
                                        <div class="col-xs-4 col-md-4">
                                            <button type="submit" class="btn btn-blue">Filtrar</button>    
                                        </div>
                                        <div class="col-xs-4 col-md-4">
                                        </div>
                                        <div class="col-xs-4 col-md-4">
                                            <div class="btn-group">
                                                <a class="btn btn-success" data-toggle="dropdown" href="javascript:void(0);">Exportar</a>
                                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-download"></i></a>
                                                <ul class="dropdown-menu dropdown-success">
                                                    <li>
                                                        <a href="javascript:void(0);">CSV</a>
                                                    </li>
                                                    <li>
                                                        <a href="/rep-access-internet/export/excel">XLS</a>
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
                                                                    id
                                                                </th>
                                                                <th scope="col">
                                                                    idSubred
                                                                </th>
                                                                <th scope="col">
                                                                    ipOrigen
                                                                </th>
                                                                <th scope="col">
                                                                    ipDestino
                                                                </th>
                                                                <th scope="col">
                                                                    puertoOrigen
                                                                </th>
                                                                <th scope="col">
                                                                    puertoDestino
                                                                </th>
                                                                <th scope="col">
                                                                    protocolo
                                                                </th>
                                                                <th scope="col">
                                                                    cantPqts
                                                                </th>
                                                                <th scope="col">
                                                                    cantBytes
                                                                </th>
                                                                <th scope="col">
                                                                    flagsTCP
                                                                </th>
                                                                <th scope="col">
                                                                    inicioSesion
                                                                </th>
                                                                <th scope="col">
                                                                    finSesion
                                                                </th>
                                                                <th scope="col">
                                                                    duracion
                                                                </th>
                                                                <th scope="col">
                                                                    url
                                                                </th>
                                                                <th scope="col">
                                                                    created_at
                                                                </th>
                                                                <th scope="col">
                                                                    updated_at
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($listNetflow as $netflow)
                                                                <tr>
                                                                    <td>
                                                                        {{ $netflow['id'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['idSubred'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['ipOrigen'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['ipDestino'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['puertoOrigen'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['puertoDestino'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['protocolo'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['cantPqts'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['cantBytes'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['flagsTCP'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['inicioSesion'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['finSesion'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['duracion'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['url'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['created_at'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $netflow['updated_at'] }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            <!--
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
                                                            -->
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



