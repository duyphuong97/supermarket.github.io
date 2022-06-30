<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_khachhang extends Model
{
    //
    protected $table ='user_khachhang';
    protected $primaryKey = 'uskh_ma';
    public $timestamps = false;
}
