<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbLoaikhenthuongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_loaikhenthuong', function (Blueprint $table) {
            $table->id();
            $table->string('tenloaikhenthuong');
            $table->double('sotienthuong');
            $table->integer('id_trinhcap');
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
        Schema::dropIfExists('tb_loaikhenthuong');
    }
}
