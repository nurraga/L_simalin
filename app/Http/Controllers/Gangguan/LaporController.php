<?php

namespace App\Http\Controllers\Gangguan;

use App\Model\Data\Aplikasi;
use App\Model\Data\Jaringan;
use App\Model\Data\JenisLayanan;
use App\Model\Data\Kategori;
use App\Model\Data\Media;
use App\Model\Data\Status;
use App\Model\Laporan\Gangguan;
use App\Model\Laporan\Perbaikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LaporController extends Controller
{
    public function create()
    {
        $judul = 'lapor gangguan';
        $menu = '';
        $urlmenu = '';
        if(Auth::user()->id_asal == 1)
        {
            $jgangguan = JenisLayanan::where('id',1)->get();
            $kategori = Kategori::where('id','<=',5)->get();
        }else{
            $jgangguan = JenisLayanan::all();
            $kategori = Kategori::all();
        }
        return view('lapor.create',compact('judul','menu','urlmenu','jgangguan','app','kategori'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'id_jenis' => 'required',
            'id_app_jar' =>'required',
            'kategori' => 'required'
        ]);

        $codeH = substr(strftime("%H", time()),0);
        $codeM = substr(strftime("%M", time()),0);
        $codeS = substr(strftime("%S", time()),0);
        $id = Auth::user()->id;
        $id_app_jar = $request->id_app_jar;
        $id_jenis = $request->id_jenis;
        $no_track = $id.$codeS.$codeM.$codeH;
        $status = Status::where('id',1)->first();

        $gangguan = new Gangguan();
        $gangguan->id_jenis = $id_jenis;
        $gangguan->id_kategori = $request->kategori;
        $gangguan->id_jar_atau_app = $id_app_jar;
        $gangguan->id_media = 1;
        $gangguan->detail_info = $request->detil_info;
        $gangguan->id_user = $id;
        $gangguan->id_status = 1;
        $gangguan->no_track = $no_track;
        $gangguan->save();
        $gangguan->Status()->attach($status);

        $idgangguan = $gangguan->id;
        $track = $gangguan->no_track = $idgangguan.$codeH.$codeM;
        $gangguan->save();

        return redirect()
            ->route('/')
            ->with('message',$track);
    }

    public function konfirmasi(Request $request)
    {
        $this->validate($request,[
            'id_jenis' => 'required',
            'id_app_jar' =>'required',
            'kategori' => 'required',
            'detil_info' => 'required',
        ]);

        $jenis = JenisLayanan::where('id',$request->id_jenis)->first();
        $kategori = Kategori::where('id',$request->kategori)->first();
        if($jenis->id == 1) {
            $app_jar = Jaringan::where('id',$request->id_app_jar)->first();
        }
        else{
            $app_jar = Aplikasi::where('id',$request->id_app_jar)->first();
        }
        $media = Media::where('id',1)->first();
        $detil_info = $request->detil_info;

        $judul = 'lapor gangguan';
        $menu = '';
        $urlmenu = '';

        return view('lapor.konfirmasi',compact('jenis','kategori','app_jar','media','detil_info','judul', 'menu', 'urlmenu'));
    }

    public function dataJar(){
        if(Auth::user()->id_asal == 1){
            $jar = Jaringan::where('id','!=',1)->get();
        }else{
            $jar = Jaringan::all();
        }
        return response()->json($jar);
    }

    public function dataApp(){
        $app = Aplikasi::all();
        return response()->json($app);
    }

    public function dataKatJar(){
        $kat = Kategori::where('id', '<=', 5)->get();
        return $kat;
    }

    public function dataKatApp(){
        $kat = Kategori::where('id', '>', 5)->get();
        return $kat;
    }

    public function tracking($notrack)
    {
        $trim = trim($notrack);
        $gangguan = Gangguan::where('no_track',$trim)->first();
        //$hasil = Perbaikan::where('id_gangguan',$gangguan->id)->first();
        //$status = Status::where('id',$gangguan->id_status)->first();
        $no = $trim;
        $judul = 'Tracking';
        $menu = '';
        $urlmenu = '';

        return view('lapor.tracking',compact('judul', 'menu', 'urlmenu','gangguan','no'));
    }
}
