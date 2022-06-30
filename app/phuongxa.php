<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phuongxa extends Model
{
    protected $table ='phuongxa';
    public $timestamps = false;
    protected $primaryKey = 'px_ma';
    public function quanhuyen()
    {
        return $this->belongsTo('App\quanhuyen','qh_ma','qh_ma');
    }
    public function danhsachvanchuyen(){
        return $this->hasMany('App\vanchuyen','vc_ma','vc_ma');
    }
}
