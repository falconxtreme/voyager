<?php

use Illuminate\Database\Seeder;
use App\Beneficiario;
use App\Nodo;

class MyBeneficiarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (Beneficiario::count() == 0 && Nodo::count()>0) {
        	Beneficiario::create([                 
        		'idNodo' => 1,                 
        		'tipoBeneficiario'  => 'Hospital',                 
        		'descripcion'  => 'Hospital 1 Norte',                 
        	]);
        }
    }
}
