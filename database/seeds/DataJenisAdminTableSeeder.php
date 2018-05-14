<?php

use Illuminate\Database\Seeder;
use App\Model\Data\JenisAdmin;

class DataJenisAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenisadmin = new JenisAdmin();
        $jenisadmin->nama_jenis = 'ADMINISTRATOR';
        $jenisadmin->keterangan = 'Admin level Tertinggi';
        $jenisadmin->save();

        $jenisadmin = new JenisAdmin();
        $jenisadmin->nama_jenis = 'Tim Teknis';
        $jenisadmin->keterangan = 'Admin yang bertanggungjawab untuk memperbaiki setiap gangguan';
        $jenisadmin->save();

        $jenisadmin = new JenisAdmin();
        $jenisadmin->nama_jenis = 'Koordinator Lapangan';
        $jenisadmin->keterangan = 'Admin yang bertugas mengkoordinir Tim Teknis';
        $jenisadmin->save();

        $jenisadmin = new JenisAdmin();
        $jenisadmin->nama_jenis = 'Kasi Infrastruktur';
        $jenisadmin->keterangan = 'Admin Kepala Seksi Infrastruktur';
        $jenisadmin->save();

        $jenisadmin = new JenisAdmin();
        $jenisadmin->nama_jenis = 'Kasi Aplikasi';
        $jenisadmin->keterangan = 'Admin Kepala Seksi Pemberdayaan Informatika';
        $jenisadmin->save();

        $jenisadmin = new JenisAdmin();
        $jenisadmin->nama_jenis = 'Kabid';
        $jenisadmin->keterangan = 'Admin Kepala Bidang';
        $jenisadmin->save();
    }
}
