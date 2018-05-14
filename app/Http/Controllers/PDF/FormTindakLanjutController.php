<?php

namespace App\Http\Controllers\PDF;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Laporan\Gangguan;
use PDF;

class FormTindakLanjutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $gangguan = Gangguan::all();
        $judul = 'Laporan Terbaru';
        $menu = '';
        $urlmenu = '';
        $i = 1;
        return view('berkas.listFormulir', compact('judul', 'urlmenu','menu','gangguan','i'));
    }

    public function formulirTindakLanjutPDF($no_track)
    {
        $lgangguan = Gangguan::where('no_track',$no_track)->get();
        $pdf = PDF::loadView('berkas.formulir', ['gangguann' => $lgangguan]);
        return $pdf->stream();
    }

}
