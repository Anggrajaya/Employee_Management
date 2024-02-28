<?php

namespace App\Exports;

use App\Models\Cuti;
use Maatwebsite\Excel\Concerns\FromCollection;

class CutiExport implements FromCollection
{
    public function collection()
    {
        return Cuti::all();
    }
}
