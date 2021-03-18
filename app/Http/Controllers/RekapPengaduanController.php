<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekapPengaduanController extends Controller
{
    public function index(){
        return view('rekap_pengaduan.lihat_pengaduan');
    }
}
