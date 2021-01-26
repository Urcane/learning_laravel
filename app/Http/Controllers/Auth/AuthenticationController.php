<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function index()
    {
        return \view('auth.login');
    }
    
    public function login(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            return \redirect('/onprogress');
        }
        return \redirect('/')->with('message', 'Wrong Email and password');
    }

    public function logout(Request $req)
    {
        Auth::logout();
        return redirect('/');
    }
}
