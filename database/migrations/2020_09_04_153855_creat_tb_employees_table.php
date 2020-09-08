<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatTbEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_employees', function (Blueprint $table) {
            $table->id();
            $table->string('manhanvien');
            $table->string('hoten');
            $table->string('chucvu');
            $table->string('namsinh');
            $table->integer('id_phongban');
            $table->integer('id_loaikhenthuong');
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
        Schema::dropIfExists('tb_employees');
    }
}
