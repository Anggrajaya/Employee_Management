<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;
use App\Models\Department;
use App\Models\Employee;

class DashboardController extends Controller
{
    public function index(){
        $jumlah_pegawai= Employee::count();
        $jumlah_cuti=Cuti::count();
        $jumlah_department= Department::count();
        $employee=Employee::all();

        return view('dashboard',['jumlah_pegawai'=>$jumlah_pegawai,'jumlah_cuti'=>$jumlah_cuti,'jumlah_department'=>$jumlah_department,'employee'=>$employee]);
    }
}
