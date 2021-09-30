<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
     protected $table = 'pegawais';
     
    protected $guarded=[];

     public function isiCuti()
    {
        return $this->belongsTo('App\Cuti','id_pegawai','id');
    }
}