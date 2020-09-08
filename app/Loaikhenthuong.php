<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaikhenthuong extends Model
{
    public $timestamps = false;
    protected $fillable = ['tenloaikhenthuong', 'sotienthuong', 'id_trinhcap'];
    protected $primarykey = 'id';
    protected $table = 'tb_loaikhenthuong';
}