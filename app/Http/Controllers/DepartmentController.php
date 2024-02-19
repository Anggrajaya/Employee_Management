<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::all();
        return view('department', ['department' => $department]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'NID' => 'required',
            'nama_departement' => 'required',
            'lokasi_departement' => 'required',
            'manager_departement' => 'required',
        ]);
        $newdepartment = Department::create($data);
        return redirect(route('department.index'));
    }

    public function edit(Department $department)
    {
        return view('department_edit', ['department' => $department]);
    }

    public function update(Department $department, Request $request)
    {
        $data = $request->validate([
            'NID' => 'required',
            'nama_departement' => 'required',
            'lokasi_departement' => 'required',
            'manager_departement' => 'required',
        ]);
        $department->update($data);
        return redirect(route('department.index'));
    }

    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect(route('department.index'))->with('success', 'Data Berhasil Dihapus');
    }
}
