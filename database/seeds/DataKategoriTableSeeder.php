<?php

use Illuminate\Database\Seeder;
use App\Model\Data\Kategori;

class DataKategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = new Kategori();
        $kategori->nama_kategori = 'Kerusakan Perangkat';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->nama_kategori = 'Gangguan akses Internet';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->nama_kategori = 'Tidak ada Jaringan';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->nama_kategori = 'Kehilangan Perangkat';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->nama_kategori = 'Force Majure(Bencana Alam)';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->nama_kategori = 'Aplikasi crash';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->nama_kategori = 'Data tidak tersimpan';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->nama_kategori = 'Data tidak tampil';
        $kategori->save();
    }
}
