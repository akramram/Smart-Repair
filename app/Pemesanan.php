<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
  protected $fillable = ['id_pemesanan','id_merek','id_tipe','id_masalah','total_harga_komponen','total_harga_jasa','harga_pengiriman','total_harga'];
}
