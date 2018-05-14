<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\Laporan\Gangguan;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $gangguan = Gangguan::where('id_status',1)->paginate(10);
        $judul = 'Laporan Terbaru';
        $menu = '';
        $urlmenu = '';
        $i = 1;
        return view('admin.beranda', compact('judul', 'urlmenu','menu','gangguan','i'));
    }

    public function indexOnline()
    {
        $gangguan = Gangguan::where('id_status',2)->paginate(10);
        $judul = 'Ditangani Online';
        $menu = '';
        $urlmenu = '';
        return view('admin.beranda-online', compact('judul', 'urlmenu','menu','gangguan'));
    }

    public function indexOffline()
    {
        $gangguan = Gangguan::where('id_status',3)->paginate(10);
        $judul = 'Ditangani Offline';
        $menu = '';
        $urlmenu = '';
        return view('admin.beranda-offline', compact('judul', 'urlmenu','menu','gangguan'));
    }

    public function indexTeratasi()
    {
        $gangguan = Gangguan::where('id_status',4)->paginate(10);
        $judul = 'Gangguan Teratasi';
        $menu = '';
        $urlmenu = '';
        return view('admin.beranda-teratasi', compact('judul', 'urlmenu','menu','gangguan'));
    }

}
