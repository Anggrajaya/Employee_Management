<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Cuti;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;


class EmployeeController extends Controller
{
    public function __construct(){
        
    }

    public function index()
    {
        $employee=Employee::all();
        $cutiNIPs = Cuti::pluck('NIP')->toArray();
        foreach ($employee as $employees) {
          $employees->status = in_array($employees->NIP, $cutiNIPs) ? 'Cuti' : 'Masuk';
        }
      return view ('pegawai',['employee'=>$employee]);   

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $data = $request ->validate([
        'NIP' => 'required',
        'nama_pegawai' => 'required',
        'image_pegawai' =>'nullable|mimes:jpg,png,jpeg|max:5048',
        'alamat_employee' => 'required',
        'no_telp_employee' => 'required',
        'gaji_employee' => 'required',
        'NID' => 'required',
        'jabatan_employee' => 'required',
      ]);

      if ($request->hasFile('image_pegawai')) {
        $file = $request->file('image_pegawai');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAS('/public/images', $fileName); // Simpan file ke direktori 'images' (sesuaikan dengan kebutuhan Anda)
        $data['image_pegawai'] = $filePath; // Simpan path file ke kolom 'image_pegawai'
      }

      $newEmployee=Employee::create($data);
      return redirect(route('pegawai.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee){
      return view('pegawai_edit',['employee'=>$employee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Employee $employee,Request $request)
    {
      $data = $request->validate([
        'NIP' => 'required',
        'nama_pegawai' => 'required',
        'image_pegawai' =>'nullable|mimes:jpg,png,jpeg|max:5048',
        'alamat_employee' => 'required',
        'no_telp_employee' => 'required',
        'gaji_employee' => 'required',
        'NID' => 'required',
        'jabatan_employee' => 'required',
    ]);

    if ($request->hasFile('image_pegawai')) {
      $file = $request->file('image_pegawai');
      $fileName = time() . '_' . $file->getClientOriginalName();
      $filePath = $file->storeAS('/public/images', $fileName); // Simpan file ke direktori 'images' (sesuaikan dengan kebutuhan Anda)
      $data['image_pegawai'] = $filePath; // Simpan path file ke kolom 'image_pegawai'
    }

    $employee->update($data);
    return redirect(route('pegawai.index'))->with('success', 'Data Berhasil Diubah');
    }
  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $employee= Employee::findOrFail($id);
      $employee->delete();
      return redirect(route('pegawai.index'))->with('success', 'Data Berhasil Dihapus');
    }
}
