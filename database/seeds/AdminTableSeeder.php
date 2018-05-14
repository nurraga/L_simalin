<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Admin();
        $user->nama = 'Nur Raga';
        $user->id_jenis = '1';
        $user->nip = '';
        $user->email = 'raga356@yahoo.co.id';
        $user->password = Hash::make('111111');
        $user->save();

        $user = new Admin();
        $user->nama = 'Romi Ramadhani';
        $user->id_jenis = '2';
        $user->nip = '';
        $user->email = 'romiramadhani@gmail.com';
        $user->password = Hash::make('111111');
        $user->save();

        $user = new Admin();
        $user->nama = 'Ryan Alva Sandy';
        $user->id_jenis = '2';
        $user->nip = '';
        $user->email = 'ryanalvasandy@gmail.com';
        $user->password = Hash::make('111111');
        $user->save();

        $user = new Admin();
        $user->nama = 'Andres Boni Fakio';
        $user->id_jenis = '2';
        $user->nip = '';
        $user->email = 'andresbonifakio@gmail.com';
        $user->password = Hash::make('111111');
        $user->save();
    }
}
