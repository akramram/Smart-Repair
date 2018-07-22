<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_address extends Model
{
  protected $fillable = ['id_user',	'nama_penerima',	'nomor_hp',	'alamat'];
}
