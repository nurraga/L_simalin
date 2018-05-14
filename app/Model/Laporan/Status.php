<?php

namespace App\Model\Laporan;

use Illuminate\Database\Eloquent\Model;
use App\Model\Laporan\Gangguan;
use App\Model\Data\Jaringan;
use App\Model\Data\JenisLayanan;
use App\Model\Data\Kategori;
use App\User;

class Status extends Model
{
    protected $table = 'penanganan_gangguan';

    protected $fillable = [
        'id_gangguan', 'id_status'
    ];

    public function getJenisLayanan()
    {
        $gangguan = Gangguan::where('id',$this->id_gangguan)->first();
        $jenis = JenisLayanan::where('id',$gangguan->id_jenis)->first();
        return $jenis->nama_jenis;

    }

    public function getKategori()
    {
        $gangguan = Gangguan::where('id',$this->id_gangguan)->first();
        $kategori = Kategori::where('id',$gangguan->id_kategori)->first();
        return $kategori->nama_kategori;
    }
}
