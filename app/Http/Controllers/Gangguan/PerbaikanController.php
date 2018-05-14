<?php

namespace App\Http\Controllers\Gangguan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Laporan\Gangguan;
use App\Model\Laporan\Perbaikan;

class PerbaikanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function updateShow($id)
    {
        $judul = 'Perbaikan Gangguan';
        $menu = '';
        $urlmenu = '';
        $lgangguan = Gangguan::findOrFail($id);
        return view('lapor.perbaikan', compact('lgangguan', 'judul', 'urlmenu','menu','gangguan'));
    }

    public function updateStore(Request $request)
    {
        $hasil = new Perbaikan();
        $hasil->id_gangguan = $request->id_gangguan;
        $hasil->hasil = $request->hasil;
        $hasil->save();

        $gangguan = Gangguan::findOrFail($request->id_gangguan);
        $gangguan->id_status = 4;
        $gangguan->save();

        return redirect()->route('admin.beranda');
    }
}
