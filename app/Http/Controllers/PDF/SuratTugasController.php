<?php

namespace App\Http\Controllers\PDF;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Laporan\Gangguan;
use PDF;

class SuratTugasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $gangguan = Gangguan::where('id_status',3)->get();
        $judul = 'Laporan Terbaru';
        $menu = '';
        $urlmenu = '';
        return view('berkas.listSuratTugas', compact('judul', 'urlmenu','menu','gangguan'));
    }

    public function suratTugasPDF($no_track)
    {
        $lgangguan = Gangguan::where('no_track',$no_track)->get();
        $pdf = PDF::loadView('berkas.suratTugas', ['gangguan' => $lgangguan]);
        return $pdf->stream();
    }
}
