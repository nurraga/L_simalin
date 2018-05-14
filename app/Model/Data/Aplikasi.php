<?php

namespace App\Model\Data;

use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
    protected $table = 'data_aplikasi';

    protected $fillable = [
        'nama_aplikasi', 'nama_pengembang', 'kontak_pengembang', 'dekripsi_aplikasi'
    ];

    public function Pemakai()
    {
        return $this->belongsToMany('App\Model\Data\Asal', 'pemakai_aplikasi', 'id_aplikasi', 'id_pemakai');
    }
}
