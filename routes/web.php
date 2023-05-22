<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [LandingController::class, 'index']);
Route::get('/visi_misi',[LandingController::class,'visi_misi']);
Route::get('/galeri_sekolah',[LandingController::class,'galeri_sekolah']);
Route::get('/berita_sekolah',[LandingController::class,'berita_sekolah']);
Route::get('/bursa_kerja_khusus',[LandingController::class,'bursa_kerja_khusus']);
Route::get('/tenaga_pendidik',[LandingController::class,'tenaga_pendidik']);
Route::get('/kurikulum',[LandingController::class,'kurikulum']);
Route::get('/kesiswaan',[LandingController::class,'kesiswaan']);
Route::get('/hummas',[LandingController::class,'hummas']);
Route::get('/sarana_prasarana',[LandingController::class,'sarana_prasarana']);
Route::get('/tata_usaha',[LandingController::class,'tata_usaha']);
Route::get('/detail_berita',[LandingController::class,'detail_berita']);
Route::get('/detail_bkk',[LandingController::class,'detail_bkk']);
// Tampilan Admin
Route::get('/dashboard',[AdminController::class,'dashboard']);
Route::get('/detail_bkk',[AdminController::class,'detail_bkk']);
Route::get('/detail_mitra',[AdminController::class,'detail_mitra']);
Route::get('/kategori_bkk',[AdminController::class,'kategori_bkk']);
Route::get('/manajemen',[AdminController::class,'manajemen']);
Route::get('/bkk',[AdminController::class,'bkk']);
Route::get('/pgri',[AdminController::class,'pgri']);
Route::get('/profile',[AdminController::class,'profile']);
Route::get('/jurusan',[AdminController::class,'jurusan']);
Route::get('/berita',[AdminController::class,'berita']);
Route::get('/budaya_sekolah',[AdminController::class,'budaya_sekolah']);
Route::get('/data_master',[AdminController::class,'data_master']);
Route::get('/galeri',[AdminController::class,'galeri']);
Route::get('/kegiatan',[AdminController::class,'kegiatan']);
Route::get('/fasilitas',[AdminController::class,'fasilitas']);

