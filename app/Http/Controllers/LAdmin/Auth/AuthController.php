<?php

namespace App\Http\Controllers\LAdmin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     //عرض صفحة تسجيل الدخول

     public function index()
     {
 
         return view('LocalAdmin/Auth/login');
     }
 
     //التحقق من عملية تسجيل الدخول
 
     public function store(Request $request)
     {
         $check = $request->all();
         if (Auth::guard('ladmin')->attempt([
             'email' => $check['email'],
             'password' => $check['password']
         ])) {
 
             return redirect()->route('ladmin.index');
         } else {
             return redirect()->route('ladmin.show.login')->with('login_error_message', 'error login please enter valid username and password');
         }
     }
 
     //تسجيل الخروج
 
     public function logout()
     {
 
         Auth::guard('ladmin')->logout();
         return redirect()->route('ladmin.show.login');
     }
}
