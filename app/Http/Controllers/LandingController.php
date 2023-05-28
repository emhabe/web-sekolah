<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('template.index');
    }
    public function visi_misi(){
        return view('template.visi_misi');
    }
    public function galeri_sekolah(){
        return view('template.galeri_sekolah');
    }
    public function berita_sekolah(){
        return view('template.berita_sekolah');
    }
    public function bursa_kerja_khusus(){
        return view('template.bursa_kerja_khusus');
    }
    public function tenaga_pendidik(){
        return view('template.tenaga_pendidik');
    }
    public function kurikulum(){
        return view('template.kurikulum');
    }
    public function kesiswaan(){
        return view('template.kesiswaan');
    }
    public function hummas(){
        return view('template.hummas');
    }
    public function sarana_prasarana(){
        return view('template.sarana_prasarana');
    }
    public function tata_usaha(){
        return view('template.tata_usaha');
    }
    public function kepala_sekolah(){
        return view('template.kepala_sekolah');
    }
    public function profile_sekolah(){
        return view('template.profile_sekolah');
    }
    public function detail_berita(){
        return view('template.detail_berita');
    }
    public function detail_bkk(){
        return view('template.detail_bkk');
    }
    public function sejarah(){
        return view('template.sejarah');
    }
    public function tatatertib(){
        return view('template.tatatertib');
    }
    public function fasilitas_sekolah(){
        return view('template.fasilitas_sekolah');
    }
    public function budaya_sekolah(){
        return view('template.budaya_sekolah');
    }
    public function ekstrakulikuler(){
        return view('template.ekstrakulikuler');
    }
    public function organisasi(){
        return view('template.organisasi');
    }
    public function teknik_otomasi_industri(){
        return view('template.teknik_otomasi_industri');
    }
    public function teknik_kendaraan_ringan(){
        return view('template.teknik_kendaraan_ringan');
    }
    public function teknik_sepeda_motor(){
        return view('template.teknik_sepeda_motor');
    }
    public function teknik_elektronika_industri(){
        return view('template.teknik_elektronika_industri');
    }  public function teknik_komputer_jaringan(){
        return view('template.teknik_komputer_jaringan');
    }
    public function rekayasa_perangkat_lunak(){
        return view('template.rekayasa_perangkat_lunak');
    }
    public function mitra_kerja(){
        return view('template.mitra_kerja');
    }
}
