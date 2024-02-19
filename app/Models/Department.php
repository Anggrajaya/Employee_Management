<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'department';
    protected $fillable =[
        'NID',
        'nama_departement',
        'lokasi_departement',
        'manager_departement',
    ];
}
