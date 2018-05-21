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
            'idDepartamento'=> '',
    		'provinces' => [],
            'districts' => []
    	]);
    }

    public function provinces($idDepartamento){
    	$departments = Ubigeo::distinct()->get(['idDepartamento','departamento']);
    	$provinces = Ubigeo::where('idDepartamento',$idDepartamento)->distinct()->get(['idProvincia','provincia']);

    	return view('rep_access_internet', [
    		'departments' => $departments,
            'idDepartamento'=> $idDepartamento,
    		'provinces' => $provinces,
            'districts' => []
    	]);
    }

    /*
    public function districts($idDepartamento,$idProvincia){
        $departments = Ubigeo::distinct()->get(['idDepartamento','departamento']);
        $provinces = Ubigeo::where('idDepartamento',$idDepartamento)->distinct()->get(['idProvincia','provincia']);
        $districts = Ubigeo::where('idProvincia',$idProvincia)->distinct()->get(['idDistrito','distrito']);

        return view('rep_access_internet', [
            'departments' => $departments,
            'idDepartamento'=> $idDepartamento,
            'provinces' => $provinces,
            'idProvincia'=> $idProvincia,
            'districts' => $districts
        ]);
    }*/
    public function districts($idDepartamentoProvincia){
        list($dep,$Prov) = explode('-', $idDepartamentoProvincia);
        //list($dep,$Prov) = split('-', $idDepartamentoProvincia);
        $departments = Ubigeo::distinct()->get(['idDepartamento','departamento']);
        $provinces = Ubigeo::where('idDepartamento',$dep)->distinct()->get(['idProvincia','provincia']);
        $districts = Ubigeo::where('idProvincia',$Prov)->distinct()->get(['idDistrito','distrito']);

        return view('rep_access_internet', [
            'departments' => $departments,
            'idDepartamento'=> $dep,
            'provinces' => $provinces,
            'idProvincia'=> $Prov,
            'districts' => $districts
        ]);
    }
}
