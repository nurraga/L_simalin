<?php

namespace App\Http\Controllers\Gangguan;

use App\Model\Laporan\Gangguan;
use App\Model\Laporan\Status;
use App\Model\Laporan\Petugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenangananController extends Controller
{
    public function offlineStore(Request $request)
    {
        $idArray = $request->input('petugas');
        $count = '';

        if (count($idArray) >= 1)
        {
            $count = count($idArray);
        }

        if($count < 1)
        {
            $this->validate($request,[
                'petugas[]' => 'required'
            ]);
        }

        for($i = 0; $i < $count; $i++)
        {
            if($idArray[$i]==0){
                $this->validate($request,[
                    'petugas[]' => 'required'
                ]);
            }
        }

        $admin = array();

        for($i = 0; $i < $count; $i++)
        {
            $admin[$i] = new Petugas();
            $admin[$i]->id_gangguan = $request->id_gangguan;
            $admin[$i]->id_admin = $request->petugas[$i];
            $admin[$i]->save();
        }

        $penanganan = new Status();
        $penanganan->id_gangguan = $request->id_gangguan;
        $penanganan->id_status = $request->id_status;
        $penanganan->save();

        for($i = 0; $i < $count; $i++)
        {
            $gangguan = Gangguan::where('id', $request->id_gangguan)->first();
            $gangguan->id_status = $request->id_status;
            $gangguan->save();
        }
        return redirect()->route('admin.beranda');
    }

    public function onlineStore(Request $request)
    {
        $idArray = $request->input('petugas');
        $count = '';

        if (count($idArray) >= 1)
        {
            $count = count($idArray);
        }

        if($count < 1)
        {
            $this->validate($request,[
                'petugas[]' => 'required'
            ]);
        }

        for($i = 0; $i < $count; $i++)
        {
            if($idArray[$i]==0){
                $this->validate($request,[
                    'petugas[]' => 'required'
                ]);
            }
        }

        $admin = array();

        for($i = 0; $i < $count; $i++)
        {
            $admin[$i] = new Petugas();
            $admin[$i]->id_gangguan = $request->id_gangguan;
            $admin[$i]->id_admin = $request->petugas[$i];
            $admin[$i]->save();
        }

        $penanganan = new Status();
        $penanganan->id_gangguan = $request->id_gangguan;
        $penanganan->id_status = $request->id_status;
        $penanganan->save();

        for($i = 0; $i < $count; $i++)
        {
            $gangguan = Gangguan::where('id', $request->id_gangguan)->first();
            $gangguan->id_status = $request->id_status;
            $gangguan->save();
        }
        return redirect()->route('admin.beranda');
    }
}
