<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik', 'id_asal','nama', 'alamat', 'email', 'foto', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getNamaDepan()
    {
        $nama = Auth::user()->nama;
        $nama = explode(' ', $nama);

        $namadepan = $nama[0];

        return $namadepan;
    }

    public function Gangguan()
    {
        return $this->hasOne('App\Model\Laporan\Gangguan');
    }

    public function Asal()
    {
        return $this->belongsTo('App\Model\Data\Asal','id_asal');
    }
}
