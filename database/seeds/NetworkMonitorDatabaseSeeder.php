<?php

use Illuminate\Database\Seeder;

class NetworkMonitorDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(MyUbigeoTableSeeder::class);
        $this->call(MyNodoTableSeeder::class);
        $this->call(MyDispositivoTableSeeder::class);
        $this->call(MySnmpTrapDispositivoSeeder::class);
        $this->call(MyBeneficiarioSeeder::class);
        $this->call(MySubredBeneficiarioSeeder::class);
        $this->call(MyNetflowSeeder::class);
        $this->call(EquipoTableSeeder::class);
        $this->call(TrapNetecoTableSeeder::class);
    }
}
