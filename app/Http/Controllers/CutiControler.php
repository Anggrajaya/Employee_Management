<?php

namespace App\Http\Controllers;
use App\Models\Cuti;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CutiExport;

class CutiControler extends Controller
{
    //

    public function index(){
        $cuti=Cuti::all();
        return View ('extend.cuti_extend',['cuti'=>$cuti]);
    }

    public function store(Request $request){
       $data = $request->validate([
        'NIP'=>'required',
        'nama_employee'=>'required',
        'tanggal_mulai'=>'required|before:tanggal_selesai',
        'tanggal_selesai'=>'required|after:tanggal_mulai',
        'jenis_cuti'=>'required'  
       ]);

       $newcuti=Cuti::create($data);
       return redirect(route('cuti.index'));
    }

    public function edit(Cuti $cuti){
      return view('cuti_edit',['cuti'=>$cuti]);
    }

    public function update(Cuti $cuti, Request $request){
      $data = $request->validate([
        'NIP'=>'required',
        'nama_employee'=>'required',
        'tanggal_mulai'=>'required|before:tanggal_selesai',
        'tanggal_selesai'=>'required|after:tanggal_mulai',
        'jenis_cuti'=>'required'  
       ]);

       $cuti->update($data);
       return redirect(route('cuti.index'));
    }

    public function destroy($id)
    {
      $cuti= Cuti::findOrFail($id);
      $cuti->delete();
      return redirect(route('cuti.index'))->with('success', 'Data Berhasil Dihapus');
    }

    public function exportToExcel(){
      return Excel::download(new CutiExport, 'cuti.xlsx');
    }
}


