<?php

namespace App\Model\Data;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'data_status';

    protected $fillable = [
        'nama_status', 'keterangan'
    ];

    public function Gangguan()
    {
        return $this->belongsTomany('App\Model\Laporan\Gangguan','status_gangguan','id_status','id_gangguan');
    }
}
