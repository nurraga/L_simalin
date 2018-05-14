<?php

use Illuminate\Database\Seeder;
use App\Model\Data\Aplikasi;
use App\Model\Data\Asal;

class DataAplikasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pemakai = Asal::where('id', 40)->first();
        $aplikasi = new Aplikasi();
        $aplikasi->nama_aplikasi = 'SIWARTA';
        $aplikasi->nama_pengembang = 'DISKOMINFO';
        $aplikasi->kontak_pengembang = '+6282284119014';
        $aplikasi->deskripsi_aplikasi = 'Aplikasi SIWARTA';
        $aplikasi->save();
        $aplikasi->pemakai()->attach($pemakai);


        $pemakai = Asal::where('id', 40)->first();
        $aplikasi = new Aplikasi();
        $aplikasi->nama_aplikasi = 'EKLIPING';
        $aplikasi->nama_pengembang = 'DISKOMINFO';
        $aplikasi->kontak_pengembang = '+628566334206';
        $aplikasi->deskripsi_aplikasi = 'Aplikasi DISKOMINFO';
        $aplikasi->save();
        $aplikasi->pemakai()->attach($pemakai);

        $pemakai = Asal::where('id', 40)->first();
        $aplikasi = new Aplikasi();
        $aplikasi->nama_aplikasi = 'SIKOPAY';
        $aplikasi->nama_pengembang = 'DISKOMINFO';
        $aplikasi->kontak_pengembang = '+628566334206';
        $aplikasi->deskripsi_aplikasi = 'Aplikasi DISKOMINFO';
        $aplikasi->save();
        $aplikasi->pemakai()->attach($pemakai);

        $pemakai = Asal::where('id', 32)->first();
        $aplikasi = new Aplikasi();
        $aplikasi->nama_aplikasi = 'SICANTIK';
        $aplikasi->nama_pengembang = 'Kementrian KOMINFO';
        $aplikasi->kontak_pengembang = '+628566334206';
        $aplikasi->deskripsi_aplikasi = 'Aplikasi Cerdas Layanan Perizinan Terpadu untuk Publik';
        $aplikasi->save();
        $aplikasi->pemakai()->attach($pemakai);

        $pemakai = Asal::where('id', 32)->first();
        $aplikasi = new Aplikasi();
        $aplikasi->nama_aplikasi = 'SIPPD';
        $aplikasi->nama_pengembang = 'PT Usadi Sistemindo Intermetika';
        $aplikasi->kontak_pengembang = '+628566334206';
        $aplikasi->deskripsi_aplikasi = 'Sistem Informasi perencanaan pembangunan daerah';
        $aplikasi->save();
        $aplikasi->pemakai()->attach($pemakai);

        $pemakai = Asal::where('id', 32)->first();
        $aplikasi = new Aplikasi();
        $aplikasi->nama_aplikasi = 'SIPKD';
        $aplikasi->nama_pengembang = 'PT Usadi Sistemindo Intermetika';
        $aplikasi->kontak_pengembang = '+628566334206';
        $aplikasi->deskripsi_aplikasi = 'Sistem Informasi Keuangan Daerah';
        $aplikasi->save();
        $aplikasi->pemakai()->attach($pemakai);
    }
}
