<?php

use Illuminate\Database\Seeder;
use App\TrapNeteco;

class TrapNetecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (TrapNeteco::count() == 0) {
        	TrapNeteco::create([                 
        		'ipEquipo' => '10.18.129.162',                 
        		'fechaProblema'  => '2018-04-21 21:51:35',
        		'fechaClareo'  => '2018-04-21 21:52:31',
        		'elementoAfectado'  => 'Communication Between NMS And NE Is Abnormal',
        		'status'  => 'cleared',
        		'severidad'  => 'Clear',
        		'estado'  => 1,
        		'alarmSource'  => '240086_PI_SAN_MARTIN_CAMARA_1_EXTERIOR',
        		'locationInfo'  => '/Transporte_Piura/240086_PI_SAN_MARTIN,Address=10.18.129.165, Protocol=CAMERA, Port=-1',
        	]);

        	TrapNeteco::create([                 
        		'ipEquipo' => '10.16.1.150',                 
        		'fechaProblema'  => '2018-04-21 21:51:35',
        		'fechaClareo'  => '2018-04-21 21:52:31',
        		'elementoAfectado'  => 'Communication Between NMS And NE Is Abnormal',
        		'status'  => 'cleared',
        		'severidad'  => 'Clear',
        		'estado'  => 1,
        		'alarmSource'  => '240078_PI_CATACAOS_CAMARA_1_EXTERIOR',
        		'locationInfo'  => '/Transporte_Piura/240078_PI_CATACAOS,Address=10.18.128.85, Protocol=CAMERA, Port=-1',
        	]);
        }
    }
}
