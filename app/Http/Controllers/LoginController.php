<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('page.login');
    }

    public function loginProses(Request $request) {
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/dashboard');
        }
        return back();
    }
}
