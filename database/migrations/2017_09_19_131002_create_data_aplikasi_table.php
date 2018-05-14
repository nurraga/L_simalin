<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAplikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_aplikasi',function (Blueprint $table){
            $table->increments('id');
            $table->string('nama_aplikasi');
            $table->string('nama_pengembang');
            $table->string('kontak_pengembang');
            $table->text('deskripsi_aplikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_aplikasi');
    }
}
