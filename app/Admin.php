<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $table = 'admin';

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = [
        'nama', 'id_jenis', 'nip', 'email', 'password'
    ];

    public function gangguan()
    {
        return $this->belongsToMany('App\Laporan\Gangguan', 'petugas_gangguan', 'id_admin', 'id_gangguan');
    }

    public function getNamaDepan()
    {
        $nama = Auth::user()->nama;
        $nama = explode(' ', $nama);

        $namadepan = $nama[0];

        return $namadepan;
    }
}
