<?php

namespace App\Http\Controllers;

use App\Ubigeo;
use App\Netflow;
use App\Http\Requests\FilterAccesoInternetRequest;
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
            'desDepartamento'=> '',
    		'provinces' => [],
            'idProvincia'=> '',
            'desProvincia' => '',
            'districts' => [],
            'listNetflow' => []
    	]);
    }

    public function provinces($idDepartamento){
        list($idDep,$desDep) = explode('-', $idDepartamento);
    	$departments = Ubigeo::distinct()->get(['idDepartamento','departamento']);
    	$provinces = Ubigeo::where('idDepartamento',$idDep)->distinct()->get(['idProvincia','provincia']);

    	return view('rep_access_internet', [
    		'departments' => $departments,
            'idDepartamento'=> $idDep,
            'desDepartamento'=> $desDep,
    		'provinces' => $provinces,
            'idProvincia'=> '',
            'desProvincia' => '',
            'districts' => [],
            'listNetflow' => []
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
        list($idDep,$desDep,$idProv,$desProv) = explode('-', $idDepartamentoProvincia);
        //list($dep,$Prov) = split('-', $idDepartamentoProvincia);
        $departments = Ubigeo::distinct()->get(['idDepartamento','departamento']);
        $provinces = Ubigeo::where('idDepartamento',$idDep)->distinct()->get(['idProvincia','provincia']);
        $districts = Ubigeo::where('idProvincia',$idProv)->distinct()->get(['idDistrito','distrito']);

        return view('rep_access_internet', [
            'departments' => $departments,
            'idDepartamento'=> $idDep,
            'desDepartamento'=> $desDep,
            'provinces' => $provinces,
            'idProvincia'=> $idProv,
            'desProvincia' => $desProv,
            'districts' => $districts,
            'listNetflow' => []
        ]);
    }

    /*
    public function filter(Request $request){

        $this->validate($request, [
            'codigoUbigeoInput' => ['required','max:6']
        ],[
            'codigoUbigeoInput.required' => 'Por favor, es necesario que ingreses el código de ubigeo.',
            'codigoUbigeoInput.max' => 'El código de ubigeo no puede supear los 6 caracteres.'
        ]);
        dd($request->all());
        return 'filtered!';
    }
    */

    public function filter(FilterAccesoInternetRequest $request){
        $NetflowList = Netflow::distinct()->get(['id','idSubred','ipOrigen','ipDestino','puertoOrigen','puertoDestino','protocolo','cantPqts','cantBytes','flagsTCP','inicioSesion','finSesion','duracion','url','created_at','updated_at']);
        //dd($NetflowList);
        //return $request->input('timepicker1');
        $departments = Ubigeo::distinct()->get(['idDepartamento','departamento']);

        return view('rep_access_internet', [
            'departments' => $departments,
            'idDepartamento'=> '',
            'desDepartamento'=> '',
            'provinces' => [],
            'idProvincia'=> '',
            'desProvincia' => '',
            'districts' => [],
            'listNetflow' => $NetflowList
        ]);
    }
}
