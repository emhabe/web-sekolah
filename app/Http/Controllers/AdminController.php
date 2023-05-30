<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('pages.dashboard');
    }
    public function detail_bkk_admin(){
        return view('pages.detail_bkk_admin');
    }
    public function detail_mitra(){
        return view('pages.detail_mitra');
    }
    public function bkk(){
        return view('pages.bkk');
    }
    public function pgri(){
        return view('pages.pgri');
    }
    public function profile(){
        return view('pages.profile');
    }
    public function kategori_bkk(){
        return view('pages.kategori_bkk');
    }
    public function manajemen(){
        return view('pages.manajemen');
    }
    public function jurusan(){
        return view('pages.jurusan');
    }
    public function berita(){
        return view('pages.berita');
    }
    public function budaya_sekolah_admin(){
        return view('pages.budaya_sekolah_admin');
    }
    public function data_master(){
        return view('pages.data_master');
    }
    public function galeri(){
        return view('pages.galeri');
    }
    public function kegiatan(){
        return view('pages.kegiatan');
    }
    public function fasilitas(){
        return view('pages.fasilitas');
    }
    public function kategori_kegiatan(){
        return view('pages.kategori_kegiatan');
    }
    public function kategori_fasilitas(){
        return view('pages.kategori_fasilitas');
    }
    public function tei(){
        return view('pages.tei');
    }
    public function tkj(){
        return view('pages.tkj');
    }
    public function tbsm(){
        return view('pages.tbsm');
    }
    public function tkr(){
        return view('pages.tkr');
    }
    public function toi(){
        return view('pages.toi');
    }
    public function rpl(){
        return view('pages.rpl');
    }
    public function organisasi(){
        return view('pages.organisasi');
    }
}
