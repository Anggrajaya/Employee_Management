<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;
use illuminate\Support\Facades\Auth;

class DetailCutiController extends Controller
{
    public function index(){
        $cuti=Cuti::all();
        $user =Auth::user();
        return view ('extend.detail_cuti_extend',['cuti'=>$cuti,'user'=>$user]);
    }
}
