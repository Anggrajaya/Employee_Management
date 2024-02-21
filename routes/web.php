<?php

use App\Http\Controllers\CutiControler;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DetailCutiController;
use App\Http\Controllers\DetailDepartmentController;
use App\Http\Controllers\DetailPegawaiController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Models\Department;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/pegawai', function(){
    return view('pegawai');
});

Route::get('/cuti', function(){
    return view('cuti');
});

Route::get('/department', function(){
    return view('department');
});

Route::get('/detail_pegawai', function(){
    return view('detail_pegawai');
});

Route::get('/detail_department',function(){
    return view('detail_department');
});

Route::get('/detail_cuti',function(){
    return view('detail_cuti');
});

//CRUD PEGAWAI

Route::get('/pegawai', [EmployeeController::class, 'index'])->name('pegawai.index');
Route::post('/pegawai', [EmployeeController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{employee}/edit', [EmployeeController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/{employee}/update', [EmployeeController::class, 'update'])->name('pegawai.update');
Route::delete('/pegawai/{employee}/delete', [EmployeeController::class, 'destroy'])->name('pegawai.destroy');


//CRUD CUTI
Route::get('/cuti',[CutiControler::class,'index'])->name('cuti.index');
Route::post('/cuti',[CutiControler::class,'store'])->name('cuti.store');
Route::get('/cuti/{cuti}/edit', [CutiControler::class, 'edit'])->name('cuti.edit');
Route::put('/cuti/{cuti}/update', [CutiControler::class, 'update'])->name('cuti.update');
Route::delete('/cuti/{cuti}/delete', [CutiControler::class, 'destroy'])->name('cuti.destroy');


//CRUD DEPARTMENT
Route::get('/department',[DepartmentController::class,'index'])->name('department.index');
Route::post('/department',[DepartmentController::class,'store'])->name('department.store');
Route::get('/department/{department}/edit', [DepartmentController::class, 'edit'])->name('department.edit');
Route::put('/department/{department}/update', [DepartmentController::class, 'update'])->name('department.update');
Route::delete('/department/{department}/delete', [DepartmentController::class, 'destroy'])->name('department.destroy');

//DETAIL PEGAWAI
Route::get('/detail_pegawai',[DetailPegawaiController::class,'index'])->name('detail_pegawai.index');

//DETAIL DEPARTMENT
Route::get('/detail_department',[DetailDepartmentController::class, 'index'])->name('detail_departmen.index');
Route::get('/department/{id}',[DepartmentController::class,'detail'])-> name ('detail_department') ;

//DETAIL CUTI
Route::get('/detail_cuti',[DetailCutiController::class,'index'])->name('detail_cuti.index');


require __DIR__.'/auth.php';
