<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekapAsetTiController extends Controller
{
    public function index(){
        return view('rekap_laporan.rekap_aset_ti');
    }
}
