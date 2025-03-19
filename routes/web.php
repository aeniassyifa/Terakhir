<?php

use App\Http\Controllers\jnsKendaraanController;
use App\Http\Controllers\jnsServiceController;
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

// Routes untuk jnsService
Route::get('/jnsservice', [jnsServiceController::class, 'index'])->name('jnsService.index');
Route::get('/jnsservice/add', [jnsServiceController::class, 'create'])->name('jnsService.create');
Route::post('/jnsservice/add', [jnsServiceController::class, 'store'])->name('jnsService.store');
Route::get('/jnsservice/edit/{id_jns_service}', [jnsServiceController::class, 'edit'])->name('jnsService.edit');
Route::post('/jnsservice/edit/{id_jns_service}', [jnsServiceController::class, 'update'])->name('jnsService.update');
Route::get('/jnsservice/delete/{id_jns_service}', [jnsServiceController::class, 'destroy'])->name('jnsService.delete');
