<?php

use Illuminate\Database\Seeder;
use App\Netflow;
use App\SubredBeneficiario;

class MyNetflowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (Netflow::count() == 0 && SubredBeneficiario::count()>0) {
        	Netflow::create([                 
        		'idSubred' => 1,                 
        		'ipOrigen'  => '100.100.1.2',                 
        		'ipDestino'  => '200.100.1.1',
        		'puertoOrigen'  => '2023',
        		'puertoDestino'  => '2022',
        		'protocolo'  => 'tcp/ip',
        		'cantPqts'  => '10',
        		'cantBytes'  => '4096',
        		'flagsTCP'  => '1',
        		'inicioSesion'  => '10:25:00',
                'finSesion'  => '11:25:00',
                'duracion'  => '01:00:00',
                'url'  => 'http://ferrari.com',
        	]);
        }
    }
}
