<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Donvi extends Model
{
    public $timestamps = false;//set time to false
    protected $fillable =[
        'madonvi','tendonvi', 'diachi'
    ];
    protected $primaryKey ='id';
    protected $table ='tb_donvi';
}