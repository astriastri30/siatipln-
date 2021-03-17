<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengaduanAsetTi extends Model
{
    protected $primaryKey = ['id_pengaduan_ti'];
    protected $fillable = ['id_pengaduan_ti','nip_pegawai', 'tgl_pengaduan'];
    protected $table = 'pengaduan_aset_tis';
    public $incrementing = false;
    public $timestamps = false;
}
