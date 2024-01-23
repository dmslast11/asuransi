<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createtb_siswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_siswa', function (Blueprint $table) {
        
            $table->string('nik');
            $table->string('nama_siswa');
            $table->string('jurusan');
            $table->string('nama_tempat_pkl');
            $table->string('alamat_pkl');
            
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
        Schema::dropIfExists('tb-siswa');
    }
}
