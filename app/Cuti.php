<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
     protected $table = 'cutis';
     
    protected $guarded=[];

    public function isiPegawai()
    {
        return $this->belongsTo('App\Pegawai','id_pegawai','id');
    }
}