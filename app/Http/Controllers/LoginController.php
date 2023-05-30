<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(){
        return view('pages.login');
    }
    public function register(){
        return view('pages.register');
    }
    public function proses_login(Request $request ){
        if (Auth::attempt(['name' => $request->name, 'level' => 'admin', 'password' => $request->password])) {
            return redirect('dashboard');
        } 
        else if (Auth::attempt(['name' => $request->name, 'level' => 'humas', 'password' => $request->password])) {
            return redirect('dashboard');
        } 
        else if (Auth::attempt(['name' => $request->name, 'level' => 'bkk', 'password' => $request->password])) {
            return redirect('dashboard');
        }
        else if (Auth::attempt(['name' => $request->name, 'level' => 'kesiswaan', 'password' => $request->password])) {
            return redirect('dashboard');
        }
        else if (Auth::attempt(['name' => $request->name, 'level' => 'sapras', 'password' => $request->password])) {
            return redirect('dashboard');
        }
        else if (Auth::attempt(['name' => $request->name, 'level' => 'kurikulum', 'password' => $request->password])) {
            return redirect('dashboard');
        }
        else
        {
            return redirect('login');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }

}
