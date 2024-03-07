<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;

class DetailDepartmentController extends Controller
{
    public function index()
    {
        $department = Department::all();
        $employee = Employee::all();
        return view('extend.detail_department_extend', ['department' => $department], compact('department','employee'));
    }
}
