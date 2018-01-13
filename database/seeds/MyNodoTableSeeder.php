<?php

use Illuminate\Database\Seeder;
use App\Ubigeo;
use App\Nodo;

class MyNodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (Nodo::count() == 0 && Ubigeo::count()>0) {
        	Nodo::create([                 
        		'idUbigeo' => 1,                 
        		'tipoNodo'  => 'Hospital',                 
        		'descripcion'  => 'Hospital del Norte',                 
        	]);
        }
    }
}
