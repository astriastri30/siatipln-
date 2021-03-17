<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengaduanAsetJaringan extends Model
{
    protected $primaryKey = ['id_pengaduan_jaringan'];
    protected $fillable = ['id_pengaduan_jaringan','unit_id', 'tgl_pengaduan'];
    protected $table = 'pengaduan_jaringans';
    public $incrementing = false;
    public $timestamps = false;
}
