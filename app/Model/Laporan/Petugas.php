<?php

namespace App\Model\Laporan;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas_gangguan';

    protected $fillable = [
        'id_gangguan', 'id_admin'
    ];
}
