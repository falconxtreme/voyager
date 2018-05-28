<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Session;

class ReportExport implements FromCollection
{

	public function __construct(string $opcion)
    {
    	switch ($opcion) {
    		case 'exportAccesoInternet':
    			$this->rowsExport = Session::get('NetflowList');
    			break;
    		
    		default:
    			$this->rowsExport = [];
    			break;
    	}
    }

    public function collection()
    {
    	return $this->rowsExport;
    }
}