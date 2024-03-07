<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Cuti;

class DetailPegawaiController extends Controller
{
    public function index(){
        $employee=Employee::all();
        $cutiNIPs = Cuti::pluck('NIP')->toArray();
        foreach ($employee as $employees) {
          $employees->status = in_array($employees->NIP, $cutiNIPs) ? 'Cuti' : 'Masuk';
        }
        return view('extend.detail_pegawai_extend',['employee'=>$employee]); 
    }
}
