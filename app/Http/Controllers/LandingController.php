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
    public function detail_berita(){
        return view('template.detail_berita');
    }
    public function detail_bkk(){
        return view('template.detail_bkk');
    }
}
