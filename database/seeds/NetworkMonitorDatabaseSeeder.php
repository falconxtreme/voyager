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
    }
}