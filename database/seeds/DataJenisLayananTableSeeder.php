<?php

use Illuminate\Database\Seeder;
use App\Model\Data\JenisLayanan;

class DataJenisLayananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenislayanan = new JenisLayanan();
        $jenislayanan->nama_jenis = 'Jaringan';
        $jenislayanan->save();

        $jenislayanan = new JenisLayanan();
        $jenislayanan->nama_jenis = 'Aplikasi';
        $jenislayanan->save();
    }
}
