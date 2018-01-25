<?php

namespace App\Http\Controllers;

use App\Ubigeo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccesoInternetController extends Controller
{
    //
     public function departments(){
		//$alarms = SnmpTrapDispositivo::all();
        //optimizar para que se divida en codigo y no en tres llamadas a BD
        //$Ubigeo = Ubigeo::where('tipoNMS',"Prime")->get();
        $departments = Ubigeo::distinct()->get(['idDepartamento','departamento']);

    	return view('rep_access_internet', [
    		'departments' => $departments,
    		'provinces' => [],
    	]);
    }

    public function provinces($idDepartamento){
    	$departments = Ubigeo::distinct()->get(['idDepartamento','departamento']);
    	$provinces = Ubigeo::where('idDepartamento',$idDepartamento)->distinct()->get(['idProvincia','provincia']);

    	return view('rep_access_internet', [
    		'departments' => $departments,
    		'provinces' => $provinces,
    	]);
    }
}
