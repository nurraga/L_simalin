<?php

namespace App\Http\Controllers\Gangguan;

use App\Model\Data\Status;
use App\Model\Laporan\Gangguan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;

class PetugasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function petugasOnline($id)
    {
        $petugas = Admin::where('id_jenis', '!=', 1)->get();
        $id_gangguan = Gangguan::where('id',$id)->first()->id;
        $id_status = 2;
        $penanganan = Status::where('id',2)->first()->nama_status;
        $judul = 'Petugas';
        $menu = '';
        $urlmenu = '';
        return view('lapor.petugasOnline', compact('petugas','judul','menu','urlmenu','id_gangguan','id_status','penanganan'));
    }

    public function petugasOffline($id)
    {
        $petugas = Admin::where('id_jenis', '!=', 1)->get();
        $id_gangguan = Gangguan::where('id',$id)->first()->id;
        $id_status = 3;
        $penanganan = Status::where('id',3)->first()->nama_status;
        $judul = 'Petugas';
        $menu = '';
        $urlmenu = '';
        return view('lapor.petugasOffline', compact('petugas','judul','menu','urlmenu','id_gangguan','id_status','penanganan'));
    }
}
