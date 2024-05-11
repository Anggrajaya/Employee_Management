<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;
use illuminate\Support\Facades\Auth;

class DetailDepartmentController extends Controller
{
    public function index()
    {
        $department = Department::all();
        $employee = Employee::all();
        $user = Auth::user();
        return view('extend.detail_department_extend', ['department' => $department,'user' => $user ], compact('department','employee','user'));
    }
}
