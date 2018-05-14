<?php

namespace App\Model\Laporan;

use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    protected $table = 'perbaikan_gangguan';

    protected $fillable = [
        'id_gangguan','hasil'
    ];
}
