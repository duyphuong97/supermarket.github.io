<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietdonhang extends Model
{
    //
    protected $table ='chitietdonhang';
    protected $primaryKey = 'ctdh_ma';
    public $timestamps = false;
    public function donhang()
    {
        return $this->belongsTo('App\donhang','dh_ma','dh_ma');
    }

    public function sanpham()
    {
        return $this->belongsTo('App\sanpham','sp_ma','sp_ma');
    }
    public function mausanpham()
    {
        return $this->belongsTo('App\mausanpham','msp_ma','msp_ma');
    }

}
