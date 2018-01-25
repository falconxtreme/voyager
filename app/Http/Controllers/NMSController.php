<?php

namespace App\Http\Controllers;

use App\SnmpTrapDispositivo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NMSController extends Controller
{
    //
    public function alarms(){
		//$alarms = SnmpTrapDispositivo::all();
        //optimizar para que se divida en codigo y no en tres llamadas a BD
        $alarmsPrime = $this->alarmsPrime();
        $alarmsCambium = $this->alarmsCambium();
        $alarmsNeteco = $this->alarmsNeteco();

    	return view('alarms', [
    		'alarmsPrime' => $alarmsPrime,
            'alarmsCambium' => $alarmsCambium,
            'alarmsNeteco' => $alarmsNeteco,
    	]);
    }

    private function alarmsPrime(){
		$alarmsPrime = SnmpTrapDispositivo::where('tipoNMS',"Prime")->get();
    	return $alarmsPrime;
    }

    private function alarmsCambium(){
		$alarmsCambium = SnmpTrapDispositivo::where('tipoNMS',"Cambium")->get();
        return $alarmsCambium;
    }

    public function alarmsNeteco(){
		$alarmsNeteco = SnmpTrapDispositivo::where('tipoNMS',"Neteco")->get();
        return $alarmsNeteco;
    }
}
