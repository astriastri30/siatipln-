<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterAsetTi;
use App\MasterAsetJaringan;
use App\PengaduanAsetTi;
use App\PengaduanAsetJaringan;
use App\DetailPengaduanTi;
use App\DetailPengaduanJaringan;

class PengaduanKerusakanController extends Controller
{

    public function index(){
        return view('pengaduan.index_pengaduan');
    }

    public function kelompokaset(Request $request){
    $master_aset_tis = MasterAsetTi::all();
    $master_aset_jaringan = MasterAsetJaringan::all();
    $pengaduan_ti = PengaduanAsetTi::all();
    $pengaduan_jaringan = PengaduanAsetJaringan::all();
    $detail_pengaduan_ti = DetailPengaduanTi::all();
    $detail_pengaduan_jaringan = DetailPengaduanJaringan::all();

    if($request->pilihaset=="Asetti"){
        return view('pengaduan.view_pengaduan_ti', compact('master_aset_tis','pengaduan_ti','detail_pengaduan_ti'));
    }
    else {
        return view('pengaduan.view_pengaduan_jaringan', compact('master_aset_jaringan','pengaduan_jaringan','detail_pengaduan_jaringan'));
    }
}
    public function addpengaduanti(){
        return view('pengaduan.add_pengaduan_ti');
    }

    public function addpengaduanjaringan(){
        return view('pengaduan.add_pengaduan_jaringan');
    }


} 
