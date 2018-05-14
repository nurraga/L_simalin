<?php

namespace App\Model\Data;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'data_kategori';

    protected $fillable = [
        'nama_kategori'
    ];

    public function Gangguan()
    {
        return $this->hasMany('App\Model\Laporan\Gangguan');
    }
}
