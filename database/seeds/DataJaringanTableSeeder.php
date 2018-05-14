<?php

use Illuminate\Database\Seeder;
use App\Model\Data\Jaringan;

class DataJaringanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'SKPD';
        $jaringan->koordinat = 'SKPD';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'WiFi ID Jembatan Panasonic Dekat CCTV';
        $jaringan->koordinat = '-0.225171.100.632368';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'WiFi ID Taman Jembatan Ratapan Ibu';
        $jaringan->koordinat = '-0.229448.100.636293';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'WiFi ID Taman Rumah Dinas DPRD Kota Payakumbuh';
        $jaringan->koordinat = '-0.207179.100.618624';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'WiFi ID RSUD Adnan WD';
        $jaringan->koordinat = '-0.223049.100.639168';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'WiFi ID Jembatan Panasonic Dekat Pasar Buah';
        $jaringan->koordinat = '-0.225516.100.632630';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'WiFi ID Kantor Walikota Baru';
        $jaringan->koordinat = '-0.222350.100.630989';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'WiFi ID Depan Kantor POS';
        $jaringan->koordinat = '-0.224090.100.632440';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'WiFi ID Kolam Renang Ngalau Indah';
        $jaringan->koordinat = '-0.256194.100.607145';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'WiFi ID Kantor Walikota Lama';
        $jaringan->koordinat = '-0.259709.100.608802';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'WiFi ID SMPN 1 / Depan Mesjid Muhammdadiyah';
        $jaringan->koordinat = '-0.223986.100.633193';
        $jaringan->save();
    }
}
