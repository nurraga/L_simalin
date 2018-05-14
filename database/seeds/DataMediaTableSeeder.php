<?php

use Illuminate\Database\Seeder;
use App\Model\Data\Media;

class DataMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $media = new Media();
        $media->nama_media = 'SiMALIN';
        $media->keterangan = 'Sistem Informasi Manajemen Laporan Gangguan Infrastruktur';
        $media->save();

        $media = new Media();
        $media->nama_media = 'Telpon';
        $media->keterangan = 'Laporan yang disampaikan melalui Media Telepon';
        $media->save();

        $media = new Media();
        $media->nama_media = 'SMS';
        $media->keterangan = 'Laporan yang disampaikan melalui Media SMS';
        $media->save();

        $media = new Media();
        $media->nama_media = 'Laporan Langsung';
        $media->keterangan = 'Laporan yang disampaikan secara langsung ke kantor DISKOMINFO Kota Payakumbuh';
        $media->save();

        $media = new Media();
        $media->nama_media = 'Email';
        $media->keterangan = 'Laporan yang disampaikan melalui E-Mail';
        $media->save();

        $media = new Media();
        $media->nama_media = 'Media Sosial';
        $media->keterangan = 'Laporan yang disampaikan melalui Media Social';
        $media->save();

        $media = new Media();
        $media->nama_media = 'Surat';
        $media->keterangan = 'Laporan yang disampaikan melalui Surat';
        $media->save();
    }
}
