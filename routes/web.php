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
Route::get('/kepala_sekolah',[LandingController::class,'kepala_sekolah']);
Route::get('/detail_berita',[LandingController::class,'detail_berita']);
Route::get('/detail_bkk',[LandingController::class,'detail_bkk']);
Route::get('/sejarah',[LandingController::class,'sejarah']);
Route::get('/tatatertib',[LandingController::class,'tatatertib']);
Route::get('/fasilitas_sekolah',[LandingController::class,'fasilitas_sekolah']);
Route::get('/profile_sekolah',[LandingController::class,'profile_sekolah']);
Route::get('/budaya_sekolah',[LandingController::class,'budaya_sekolah']);
Route::get('/ekstrakulikuler',[LandingController::class,'ekstrakulikuler']);
Route::get('/organisasi',[LandingController::class,'organisasi']);
Route::get('/teknik_otomasi_industri',[LandingController::class,'teknik_otomasi_industri']);
Route::get('/teknik_kendaraan_ringan',[LandingController::class,'teknik_kendaraan_ringan']);
Route::get('/teknik_sepeda_motor',[LandingController::class,'teknik_sepeda_motor']);
Route::get('/teknik_elektronika_industri',[LandingController::class,'teknik_elektronika_industri']);
Route::get('/teknik_komputer_jaringan',[LandingController::class,'teknik_komputer_jaringan']);
Route::get('/rekayasa_perangkat_lunak',[LandingController::class,'rekayasa_perangkat_lunak']);
Route::get('/mitra_kerja',[LandingController::class,'mitra_kerja']);
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

