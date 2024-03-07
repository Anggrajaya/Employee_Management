<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';
    protected $fillable =[
        'NIP',
        'image_pegawai',
        'nama_pegawai',
        'alamat_employee',
        'no_telp_employee',
        'gaji_employee',
        'NID',
        'jabatan_employee',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($employee) {
            // Ambil semua pegawai yang memiliki ID lebih besar dari ID pegawai yang dihapus
            $employeesToUpdate = Employee::where('id', '>', $employee->id)->get();

            // Perbarui nomor urutnya dengan mengurangi satu
            foreach ($employeesToUpdate as $emp) {
                $emp->update(['nomor_urut' => $emp->nomor_urut - 1]);
            }
        });   
    }
    public function status()
    {
        $cutiNIPs = Cuti::pluck('NIP')->toArray();
        return in_array($this->NIP, $cutiNIPs) ? 'Cuti' : 'Masuk';
    }

    public function uploadImage($image)
    {
        if ($image) {
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $fileName);
            $this->image_pegawai = 'images/' . $fileName;
            $this->save();
        }
    }
}




