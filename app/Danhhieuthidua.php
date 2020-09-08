<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhhieuthidua extends Model
{
    public $timestamps = false;//set time to false
    protected $fillable =[
        'tendanhhieu','namdatdanhhieu', 'masoquyetdinh', 'noicap', 'id_nhanvien', 'ghichu'
    ];
    protected $primaryKey ='id';
    protected $table ='tb_danhhieuthidua';
}
