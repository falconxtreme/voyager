<?php

namespace App\Http\Controllers;

use App\SnmpTrapDispositivo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NMSController extends Controller
{
    //
    public function alarms(){
		$alarms = SnmpTrapDispositivo::all();

    	return view('alarms', [
    		'alarms' => $alarms,
    	]);
    }

    public function alarmsPrime(){
		$alarmsNeteco = [
			'una cadena',
			'dos cadena'
		];

    	return view('alarms', [
    		'alarmsNeteco' => $alarmsNeteco,
    	]);
    }

    public function alarmsCambium(){
		$alarmsNeteco = [
			'una cadena',
			'dos cadena'
		];

    	return view('alarms', [
    		'alarmsNeteco' => $alarmsNeteco,
    	]);
    }

    public function alarmsNeteco(){
		$alarmsNeteco = [
			'una cadena',
			'dos cadena'
		];

    	return view('alarms', [
    		'alarmsNeteco' => $alarmsNeteco,
    	]);
    }
}
