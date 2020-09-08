<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatTbDanhhieuthiduaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_danhhieuthidua', function (Blueprint $table) {
            $table->id();
            $table->string('tendanhhieu');
            $table->timestamp('namdatdanhhieu');
            $table->string('masoquyetdinh');
            $table->string('noicap');
            $table->integer('id_nhanvien');
            $table->string('ghichu');
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
        Schema::dropIfExists('tb_danhhieuthidua');
    }
}
