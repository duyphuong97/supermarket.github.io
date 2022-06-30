<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quanhuyen extends Model
{
    protected $table ='quanhuyen';
    public $timestamps = false;
    protected $primaryKey = 'qh_ma';
    public function tinhthanh()
    {
        return $this->belongsTo('App\tinhthanh','tt_ma','tt_ma');
    }

    public function phuongxa(){
        return $this->hasMany('App\phuongxa','px_ma','px_ma');
    }
    public function danhsachvanchuyen(){
        return $this->hasMany('App\vanchuyen','vc_ma','vc_ma');
    }
}
