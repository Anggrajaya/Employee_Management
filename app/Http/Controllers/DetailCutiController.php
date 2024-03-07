<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;

class DetailCutiController extends Controller
{
    public function index(){
        $cuti=Cuti::all();
        return view ('extend.detail_cuti_extend',['cuti'=>$cuti]);
    }
}
