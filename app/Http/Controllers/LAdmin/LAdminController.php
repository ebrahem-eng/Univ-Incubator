<?php

namespace App\Http\Controllers\LAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LAdminController extends Controller
{
       //عرض الصفحة الرئيسية للادمن
    
       public function index()
       {
     
        return view('Local_Admin.index');
         
       }
}
