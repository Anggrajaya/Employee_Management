<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey ='id_employee';
    protected $foreignKey ='id_departement';
    protected $fillable =[
        'nama_employee',
        'alamat_employee',
        'no_telepon_employee',
        'gaji_employee',
        'job_employee',
        'jabatan_employee',
    ];
    use HasFactory;
}
