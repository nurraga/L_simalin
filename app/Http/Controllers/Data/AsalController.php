<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Data\Asal;

class AsalController extends Controller
{
    public function index()
    {
        $judul = 'list asal pelapor';
        $menu = '<i class="fa fa-pencil-square-o"></i>';
        $urlmenu = 'http://localhost:8000/admin/list-skpd';
        $asals = Asal::all();
        return view('data.asal.index', compact('asals','judul','menu','urlmenu'));
    }

    public function create()
    {
        return view('data.asal.create');
    }

    public function store(Request $request)
    {
        $asal = new Asal();
        $asal->nama_asal = $request->nama_asal;
        $asal->alamat = $request->alamat;
        $asal->save();
        return redirect()->route('list.skpd');
    }
}
