<?php

use App\Http\Controllers\jnsKendaraanController;
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
    return view('tamplate');
});

Route::get('/jnskendaraan', [jnsKendaraanController::class, 'index'])->name('jnsKendaraan.index');
Route::get('/jnskendaraan/add', [jnsKendaraanController::class, 'create'])->name('jnsKendaraan.create');
Route::post('/jnskendaraan/add', [jnsKendaraanController::class, 'store'])->name('jnsKendaraan.store');
Route::get('/jnskendaraan/edit/{id_jns_kendaraan}', [jnsKendaraanController::class, 'edit'])->name('jnsKendaraan.edit');
Route::post('/jnskendaraan/edit/{id_jns_kendaraan}', [jnsKendaraanController::class, 'update'])->name('jnsKendaraan.update');
Route::get('/jnskendaraan/delete/{id_jns_kendaraan}', [jnsKendaraanController::class, 'destroy'])->name('jnsKendaraan.delete');