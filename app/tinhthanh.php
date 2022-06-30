<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tinhthanh extends Model
{
    //
    protected $table ='tinhthanh';
    public $timestamps = false;
    protected $primaryKey = 'tt_ma';

    public function quanhuyen(){
        return $this->hasMany('App\quanhuyen','qh_ma','qh_ma');
    }
    public function danhsachvanchuyen(){
        return $this->hasMany('App\vanchuyen','vc_ma','vc_ma');
    }
}
