<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBidangController;
use App\Http\Controllers\DataKegiatanController;
use App\Http\Controllers\DataProgramController;
use App\Http\Controllers\DataSubBidangController;
use App\Http\Controllers\DataSubKegiatanController;
use App\Http\Controllers\KPAController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\PPKomController;
use App\Http\Controllers\PPTKController;
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
    return view('login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// data dasar
Route::resource('pimpinan', PimpinanController::class);
Route::resource('KPA', KPAController::class);
Route::resource('PPKom', PPKomController::class);
Route::resource('PPTK', PPTKController::class);

// pengaturan
Route::resource('admin', AdminController::class);
Route::resource('perusahaan', PerusahaanController::class);
Route::resource('data-program', DataProgramController::class);
Route::resource('data-kegiatan', DataKegiatanController::class);
Route::resource('data-sub-kegiatan', DataSubKegiatanController::class);
Route::resource('data-bidang', DataBidangController::class);
Route::resource('data-sub-bidang', DataSubBidangController::class);
