<?php

use Illuminate\Database\Seeder;
use App\Model\Data\Status;

class DataStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Status();
        $status->nama_status = 'Laporan baru';
        $status->keterangan = 'laporan baru yang belum diproses';
        $status->save();

        $status = new Status();
        $status->nama_status = 'Penanganan Online';
        $status->keterangan = 'Laporan gangguan yang akan/sedang ditindaklanjuti secara Online';
        $status->save();

        $status = new Status();
        $status->nama_status = 'Penanganan Offline';
        $status->keterangan = 'Laporan gangguan yang akan/sedang ditindaklanjuti secara Offline/tindakan langsung ke lapangan';
        $status->save();

        $status = new Status();
        $status->nama_status = 'Penanganan Selesai';
        $status->keterangan = 'Laporan gangguan yang telah selesai ditindaklanjuti';
        $status->save();
    }
}
