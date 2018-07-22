<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masalah extends Model
{
  protected $fillable = ['deskripsi','nama_komponen','harga','imagePath'];
}
