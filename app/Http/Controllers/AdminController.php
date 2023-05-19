<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('pages.dashboard');
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
}
