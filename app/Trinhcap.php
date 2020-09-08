<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trinhcap extends Model
{
    public $timestamps = false;
    protected $fillable = ['tentrinhcap'];
    protected $primarykey = 'id';
    protected $table = 'tb_trinhcap';
}
