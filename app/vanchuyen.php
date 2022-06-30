<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vanchuyen extends Model
{
    //
    protected $table ='vanchuyen';
    protected $primaryKey = 'vc_ma';
    public $timestamps = false;
    public function vanchuyen()
    {
        return $this->hasOne('App\donhang','dh_ma','dh_ma');
    }
    public function quanhuyen()
    {
        return $this->belongsTo('App\quanhuyen','qh_ma','qh_ma');
    }
    public function tinhthanh()
    {
        return $this->belongsTo('App\tinhthanh','tt_ma','tt_ma');
    }
    public function phuongxa()
    {
        return $this->belongsTo('App\phuongxa','px_ma','px_ma');
    }
}
