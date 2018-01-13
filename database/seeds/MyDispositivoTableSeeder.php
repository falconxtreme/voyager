<?php

use Illuminate\Database\Seeder;
use App\Nodo;
use App\Dispositivo;

class MyDispositivoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (Dispositivo::count() == 0 && Nodo::count()>0) {
        	Dispositivo::create([                 
        		'idNodo' => 1,                 
        		'dispositivo'  => '111.111.111.111',                 
        		'tipoDispositivo'  => 'Switch',
        		'descripcion'  => 'Switch del Norte',
        	]);
        }
    }
}
