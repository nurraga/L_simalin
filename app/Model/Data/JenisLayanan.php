<?php

namespace App\Model\Data;

use Illuminate\Database\Eloquent\Model;

class JenisLayanan extends Model
{
    protected $table = 'data_jenis_layanan';

    protected $fillable = [
        'nama_jenis'
    ];

    public function Gangguan()
    {
        return $this->hasMany('App\Model\Laporan\Gangguan');
    }
}
