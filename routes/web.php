<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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

Route::get('/', [KaryawanController::class, 'getAllKaryawan'])->name('karyawan.index');

Route::get('/karyawan', [KaryawanController::class, 'getAllKaryawan'])->name('karyawan.index');
Route::post('/karyawan', [KaryawanController::class, 'addKaryawan']);
Route::post('/search', [KaryawanController::class, 'searchKaryawan'])->name('karyawan.search');
Route::delete('/karyawan/{id}', [KaryawanController::class, 'deleteKaryawan'])->name('karyawan.delete');
Route::put('/karyawan/update/{id}', [KaryawanController::class, 'updateKaryawan'])->name('karyawan.update');
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'showUpdateForm'])->name('karyawan.edit');
Route::put('/karyawan/update/{id}', [KaryawanController::class, 'updateKaryawan'])->name('karyawan.update');


