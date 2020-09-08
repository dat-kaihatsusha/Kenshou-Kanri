<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phongban extends Model
{
    public $timestamps = false;
    protected $fillable = ['tenphongban', 'id_donvi', 'id_loaikhenthuong'];
    protected $primarykey = 'id';
    protected $table = 'tb_phongban';
}
