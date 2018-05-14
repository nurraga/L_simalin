<?php

namespace App\Model\Data;

use Illuminate\Database\Eloquent\Model;

class Asal extends Model
{
    protected $table = 'data_asal';

    protected $fillable = [
        'nama_asal', 'alamat', 'singkat'
    ];

    public function User()
    {
        return $this->hasMany('App\User');
    }

    public function Aplikasi()
    {
        return $this->hasMany('App\Model\Data\Aplikasi','pemakai_aplikasi','id_pemakai', 'id_aplikasi');
    }
}
