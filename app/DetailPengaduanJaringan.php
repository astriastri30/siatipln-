<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPengaduanJaringan extends Model
{
    protected $primaryKey = ['id_pengaduan_jaringan'];
    protected $fillable = ['id_pengaduan_ti','id_master_ti','status_pengaduan','foto','keterangan'];
    protected $table = 'detail_pengaduan_tis';
    public $incrementing = false;
    public $timestamps = false;
}
