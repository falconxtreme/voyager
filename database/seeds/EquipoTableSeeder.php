<?php

use Illuminate\Database\Seeder;
use App\Equipo;

class EquipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (Equipo::count() == 0) {
        	Equipo::create([                 
        		'ipEquipo' => '10.16.1.153',                 
        		'marca'  => 'Cisco',                 
        		'modelo'  => 'ASR930',
        		'nodoAsociado'  => 'Nodo_Castilla',
        		'distrito'  => 'Catacaos',
        		'provincia'  => 'Piura',
        		'departamento'  => 'Piura',
        	]);

        	Equipo::create([                 
        		'ipEquipo' => '10.16.1.151',                 
        		'marca'  => 'Cisco',                 
        		'modelo'  => 'ASR930',
        		'nodoAsociado'  => 'Nodo_Union',
        		'distrito'  => 'Catacaos',
        		'provincia'  => 'Piura',
        		'departamento'  => 'Piura',
        	]);

        	Equipo::create([                 
        		'ipEquipo' => '10.16.1.150',                 
        		'marca'  => 'Cisco',                 
        		'modelo'  => 'ASR930',
        		'nodoAsociado'  => 'Nodo_Catacaos',
        		'distrito'  => 'Catacaos',
        		'provincia'  => 'Piura',
        		'departamento'  => 'Piura',
        	]);

        	Equipo::create([                 
        		'ipEquipo' => '10.17.1.150',                 
        		'marca'  => 'Cisco',                 
        		'modelo'  => 'ssc880',
        		'nodoAsociado'  => 'Nodo_Catacaos',
        		'distrito'  => 'Catacaos',
        		'provincia'  => 'Piura',
        		'departamento'  => 'Piura',
        	]);

        	Equipo::create([                 
        		'ipEquipo' => '10.17.1.151',                 
        		'marca'  => 'Cisco',                 
        		'modelo'  => 'ssc880',
        		'nodoAsociado'  => 'Nodo_LaUnion',
        		'distrito'  => 'Catacaos',
        		'provincia'  => 'Piura',
        		'departamento'  => 'Piura',
        	]);

        	Equipo::create([                 
        		'ipEquipo' => '10.17.1.152',                 
        		'marca'  => 'Cisco',                 
        		'modelo'  => 'ssc880',
        		'nodoAsociado'  => 'Nodo_Mallares',
        		'distrito'  => 'Catacaos',
        		'provincia'  => 'Piura',
        		'departamento'  => 'Piura',
        	]);

        	Equipo::create([                 
        		'ipEquipo' => '10.18.128.2',                 
        		'marca'  => 'huawei',                 
        		'modelo'  => 'scc800',
        		'nodoAsociado'  => 'AMOTAPE',
        		'distrito'  => 'AMOTAPE',
        		'provincia'  => 'PAITA',
        		'departamento'  => 'PIURA',
        	]);

        	Equipo::create([                 
        		'ipEquipo' => '10.18.128.50',                 
        		'marca'  => 'huawei',                 
        		'modelo'  => 'scc800',
        		'nodoAsociado'  => 'BERNAL',
        		'distrito'  => 'BERNAL',
        		'provincia'  => 'SECHURA',
        		'departamento'  => 'PIURA',
        	]);

        	Equipo::create([                 
        		'ipEquipo' => '10.18.128.66',                 
        		'marca'  => 'huawei',                 
        		'modelo'  => 'scc800',
        		'nodoAsociado'  => 'CASTILLA',
        		'distrito'  => 'CASTILLA',
        		'provincia'  => 'PIURA',
        		'departamento'  => 'PIURA',
        	]);

        	Equipo::create([                 
        		'ipEquipo' => '10.18.128.82',                 
        		'marca'  => 'huawei',                 
        		'modelo'  => 'scc800',
        		'nodoAsociado'  => 'CATACAOS',
        		'distrito'  => 'CATACAOS',
        		'provincia'  => 'PIURA',
        		'departamento'  => 'PIURA',
        	]);
        }
    }
}
