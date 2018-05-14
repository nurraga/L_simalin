<?php

namespace App\Model\Data;

use Illuminate\Database\Eloquent\Model;

class Jaringan extends Model
{
    protected $table = 'data_jaringan';

    protected $fillable = [
        'nama_jaringan', 'koordinat'
    ];
}
