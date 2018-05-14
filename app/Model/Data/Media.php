<?php

namespace App\Model\Data;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'data_media';

    protected $fillable = [
        'nama_media', 'keterangan'
    ];
}
