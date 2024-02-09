<?php

use App\Http\Controllers\BerhitungController;
use App\Http\Controllers\TestController;
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

Route::get('/daftar', function () {
    return('pjko');
});

Route::get('/njajal/{id}', function ($id) {
    return 'njajal' . $id;
});
Route::post('/kirim',[TestController::class, 'kirim']);
Route::get('/coba',[TestController::class, 'index']);
