<?php

namespace App\Exports;

use App\Models\Department;
use Maatwebsite\Excel\Concerns\FromCollection;

class DepartmentExport implements FromCollection
{
    public function collection()
    {
        return Department::all();
    }
}
