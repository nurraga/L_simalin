<?php

namespace App\Model\Data;

use Illuminate\Database\Eloquent\Model;

class PemakaiAplikasi extends Model
{
    protected $table = 'pemakai_aplikasi';

    protected $fillable = [
        'id_aplikasi', 'id_pemakai'
    ];
}
