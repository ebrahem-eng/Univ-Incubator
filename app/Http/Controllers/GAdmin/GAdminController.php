<?php

namespace App\Http\Controllers\GAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GAdminController extends Controller
{
    

    //عرض الصفحة الرئيسية للادمن
    
    public function index()
    {
     return view('GlobalAdmin.index');   
    }

}
