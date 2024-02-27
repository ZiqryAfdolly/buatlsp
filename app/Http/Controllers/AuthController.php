<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('login.index');
    }

    public function proccesLogin(Request $request) {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)) {
            if(Auth::user()->roles == 'Admin'){
                return redirect()->intended('/admin');
            }
            if(Auth::user()->roles == 'Petugas') {
                return redirect()->intended('/petugas');
            }
            if(Auth::user()->roles == 'Penumpang') {
                return redirect()->intended('/penumpang');
            }
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }
}
