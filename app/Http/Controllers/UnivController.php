<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnivController extends Controller
{
    public function univ_spu()
    {
        return view('Univ/spu');
    }

    public function univ_iust()
    {
        return view('Univ/iust');
    }

    public function univ_aiu()
    {
        return view('Univ/aiu');
    }

    public function univ_rpu()
    {
        return view('Univ/rpu');
    }

    public function univ_aspu()
    {
        return view('Univ/aspu');
    }

    public function univ_ypu()
    {
        return view('Univ/ypu');
    }

    public function univ_jpu()
    {
        return view('Univ/jpu');
    }


}
