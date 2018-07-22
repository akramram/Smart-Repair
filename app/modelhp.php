<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelhp extends Model
{
    protected $table = 'modelhps';

    public function merek(){
      return $this->belongsTo('App\merek','id_model');
    }
}
