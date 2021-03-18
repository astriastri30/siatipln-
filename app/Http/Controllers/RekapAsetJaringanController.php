<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekapAsetJaringanController extends Controller
{
    public function index(){
        return view('rekap_laporan.rekap_aset_jaringan');
    }
}
