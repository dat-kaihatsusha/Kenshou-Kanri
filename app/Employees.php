<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public $timestamps = false;//set time to false
    protected $fillable =[
        'manhanvien','hoten', 'chucvu', 'namsinh', 'id_phongban', 'id_loaikhenthuong'
    ];
    protected $primaryKey ='id';
    protected $table ='tb_employees';
}
