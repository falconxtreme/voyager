<?php

namespace App\Exports;

use App\Ubigeo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Session;

class InvoicesExport implements FromCollection
{
    public function collection()
    {
    	$NetflowList = Session::get('NetflowList');
        return $NetflowList;
    }
}