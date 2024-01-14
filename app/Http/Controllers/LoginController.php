<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (Auth::guard('web')->attempt($request->only('username', 'password'))){
            return redirect('/dashboard');
        }else{
            return redirect('/login')->with('error', 'Maaf Username dan Password yang Anda Masukan Salah!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
    
    public function indexCustomer()
    {
        return view('login-cus');
    }

    public function loginCustomer(Request $request)
    {
        if (Auth::guard('customer')->attempt($request->only('username', 'password'))){
            return redirect('/customer/dashboard');
        }else{
            return redirect('/customer/login')->with('error', 'Maaf Username dan Password yang Anda Masukan Salah!');
        }
    }

    public function logoutCustomer()
    {
        Auth::logout();
        return view('/customer/login');
    }
}
