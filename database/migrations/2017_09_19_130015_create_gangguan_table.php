<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGangguanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangguan', function (Blueprint $table){
           $table->increments('id');
           $table->integer('id_jenis');
           $table->integer('id_kategori');
           $table->integer('id_jar_atau_app');
           $table->integer('id_media');
           $table->text('detail_info');
           $table->integer('id_user');
            $table->integer('id_status');
            $table->string('no_track');
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
        Schema::dropIfExists('gangguan');
    }
}
