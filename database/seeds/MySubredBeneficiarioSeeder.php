<?php

use Illuminate\Database\Seeder;
use App\Beneficiario;
use App\SubredBeneficiario;

class MySubredBeneficiarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (SubredBeneficiario::count() == 0 && Beneficiario::count()>0) {
        	SubredBeneficiario::create([                 
        		'idBeneficiario' => 1,                 
        		'subred'  => '100.100.1.1',
        		'tipo' => 'SUBRED',                 
        		'descripcion'  => 'Hospital 1 Norte TPI',                 
        	]);

        	SubredBeneficiario::create([                 
        		'idBeneficiario' => 1,                 
        		'subred'  => '100.100.1.0/24',
        		'tipo' => 'ENLACE',                 
        		'descripcion'  => 'Enlace Hospital 1 Norte TPI',                 
        	]);
        }
    }
}
