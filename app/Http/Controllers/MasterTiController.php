<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterAsetTi;
use App\JenisAset;
use App\DataPegawai;

class MasterTiController extends Controller
{
    public function index(){
        $master_aset_tis = MasterAsetTi::all();
        $jenis_asets=JenisAset::all();
        $pegawais=DataPegawai::all();
        return view ('master_aset_ti.tambahmaster', compact('master_aset_tis','jenis_asets','pegawais'));
    }
    public function store(Request $request){
        $master_aset_tis = new MasterAsetTi([
         'jenis_aset_id'=> $request->input('jenisselect'),
         'nip_pegawai'=> $request->input('nip_pegawai'),
         'nama_master_ti'=> $request->input('nama_master_ti')
         ]);
        //  dd($request->all());
        $master_aset_tis->save();
         return redirect()->back();   
    }
    public function update (Request $request){
        $master_aset_tis = MasterAsetTi::where('id_master_ti',$request->id_master_ti);
        
        try {
            $master_aset_tis->update ([
                'jenis_aset_id'=> $request->jenisselect,
                 'nip_pegawai' => $request->nip_pegawai,
                 'nama_master_ti' =>$request->nama_master_ti,       
            ]);
        } catch (\Throwable $th) {

        }
        return redirect()->back(); 

    }
}
