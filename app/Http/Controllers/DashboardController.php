<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;
use App\Models\Department;
use App\Models\Employee;
use illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $jumlah_pegawai= Employee::count();
        $jumlah_cuti=Cuti::count();
        $jumlah_department= Department::count();
        $employee=Employee::all();
        $user =Auth::user();

        return view('extend.dashboard_user_extend',['jumlah_pegawai'=>$jumlah_pegawai,'jumlah_cuti'=>$jumlah_cuti,'jumlah_department'=>$jumlah_department,'employee'=>$employee,'user'=>$user]);
    }
}
