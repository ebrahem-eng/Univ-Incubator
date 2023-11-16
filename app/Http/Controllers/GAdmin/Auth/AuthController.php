<?php

namespace App\Http\Controllers\GAdmin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //عرض صفحة تسجيل الدخول

    public function index()
    {

        return view('GlobalAdmin/Auth/login');
    }

    //التحقق من عملية تسجيل الدخول

    public function store(Request $request)
    {
        $check = $request->all();
        if (Auth::guard('gadmin')->attempt([
            'email' => $check['email'],
            'password' => $check['password']
        ])) {

            return redirect()->route('gadmin.index');
        } else {
            return redirect()->route('gadmin.show.login')->with('login_error_message', 'error login please enter valid username and password');
        }
    }

    //تسجيل الخروج

    public function logout()
    {

        Auth::guard('gadmin')->logout();
        return redirect()->route('gadmin.show.login');
    }
}
