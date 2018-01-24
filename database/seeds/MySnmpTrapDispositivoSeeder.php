<?php

use Illuminate\Database\Seeder;
use App\SnmpTrapDispositivo;

class MySnmpTrapDispositivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (SnmpTrapDispositivo::count() == 0) {
        	SnmpTrapDispositivo::create([                 
        		'idDispositivo' => 1,                 
        		'tipoNMS'  => 'Prime',                 
        		'fechaInicio'  => '23/01/2018 19:02:00',
        		'fechaFin'  => '',
        		'elementoAfectado'  => 'switch',
        		'descripcion'  => 'creacion de vlan',
        		'estado'  => 'ABIERTO',
        		'severidad'  => 'Normal',
        		'nroReparacion'  => '',
        		'motivoExclusion'  => '',
        	]);
        }
    }
}
