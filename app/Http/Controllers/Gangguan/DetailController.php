<?php

namespace App\Http\Controllers\Gangguan;

use App\Admin;
use App\Model\Laporan\Gangguan;
use App\Model\Laporan\Perbaikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function detail($id)
    {
        $gangguan = Gangguan::where('id', $id)->first();
        $judul = 'Detail';
        $menu = '';
        $urlmenu = '';
        return view('lapor.detail', compact('judul','menu','urlmenu','gangguan','petugas'));
    }

    public function detailHasil($id)
    {
        $gangguan = Gangguan::where('id', $id)->first();
        $hasil = Perbaikan::where('id_gangguan',$id)->first();
        $judul = 'Detail';
        $menu = '';
        $urlmenu = '';
        return view('lapor.detailHasil', compact('hasil','judul','menu','urlmenu','gangguan','petugas'));
    }
}
