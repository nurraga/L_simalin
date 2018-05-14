<?php

namespace App\Model\Laporan;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;
use App\User;
use App\Model\Data\Jaringan;
use App\Model\Data\Aplikasi;
use App\Model\Data\Media;
use Carbon\Carbon;


class Gangguan extends Model
{
    protected $table = 'gangguan';

    protected $fillable = [
        'id_jenis', 'id_kategori', 'id_jar_atau_app', '	id_media', 'detail_info', 'id_user', 'id_status', 'no_track'
    ];

    public function Status()
    {
        return $this->belongsToMany('App\Model\Data\Status','penanganan_gangguan','id_gangguan','id_status')->withTimestamps();
    }

    public function Pelapor()
    {
        return $this->belongsTo('App\User','id_user');
    }

    public function admin()
    {
        return $this->belongsToMany('App\Admin', 'petugas_gangguan', 'id_gangguan', 'id_admin');
    }

    public function Jenis()
    {
        return $this->belongsTo('App\Model\Data\JenisLayanan', 'id_jenis');
    }

    public function Media()
    {
        return $this->belongsTo('App\Model\Data\Media','id_media');
    }

    public function Kategori()
    {
        return $this->belongsTo('App\Model\Data\Kategori','id_kategori');
    }

    public function getAsal()
    {
        if($this->id_jenis == 1)
        {
            $user = User::where('id',$this->id_user)->first();
            return $user->asal()->first()->nama_asal;
        }
        else{
            $user = User::where('id',$this->id_user)->first();
            return $user->asal()->first()->nama_asal;
        }
    }

    public function getAsalId()
    {
        if($this->id_jenis == 1)
        {
            if($this->id_jar_atau_app == 1)
            {
                $user = User::where('id',$this->id_user)->first();
                return $user->asal()->first()->id;
            }
            else{
                $wifi = Jaringan::where('id',$this->id_jar_atau_app)->first();
                return $wifi->id;
            }
        }
        else{
            $user = User::where('id',$this->id_user)->first();
            return $user->asal()->first()->id;
        }
    }

    public function getLokasiGangguan()
    {
        if($this->id_jenis == 1)
        {
            if($this->id_jar_atau_app == 1)
            {
                $user = User::where('id',$this->id_user)->first();
                return $user->asal()->first()->nama_asal;
            }
            else{
                $wifi = Jaringan::where('id',$this->id_jar_atau_app)->first();
                return $wifi->nama_jaringan;
            }
        }
        else{
            $user = User::where('id',$this->id_user)->first();
            return $user->asal()->first()->nama_asal;
        }
    }

    public function getAplikasi()
    {
        $aplikasi = Aplikasi::where('id',$this->id_jar_atau_app)->first();
        return $aplikasi->nama_aplikasi;
    }

    public function getMedia()
    {
        $media = Media::where('id',$this->id_media)->first();
        return $media->nama_media;
    }

    public function getCreatedAt(){
        Date::setLocale('id');
        return Date::parse($this->created_at);
    }

    public function getUpdatedAt(){
        Date::setLocale('id');
        return Date::parse($this->updated_at);
    }

    public function hasKategori($id)
    {
        if($this->kategori()->where('data_kategori.id', $id)->first())
        {
            return true;
        }
        return false;
    }

    public function hasMedia($id)
    {
        if($this->media()->where('data_media.id', $id)->first())
        {
            return true;
        }
        return false;
    }

    public function getCurrentDate()
    {
        Date::setLocale('id');
        return Date::parse(Carbon::now());
    }

    public function getSkpd()
    {
        return Jaringan::where('id',$this->id_jar_atau_app)->first()->nama_jaringan;
    }

    public function getHasil()
    {
        return Perbaikan::where('id_gangguan',$this->id)->first()->hasil;
    }

    public function getJenis()
    {
        return JenisLayanan::where('id',$this->id_jenis)->first()->nama_jenis;
    }
}
