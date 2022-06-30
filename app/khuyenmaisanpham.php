<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khuyenmaisanpham extends Model
{
    //
    protected $table ='khuyenmaisanpham';
    protected $primaryKey = 'kmsp_ma';
    public $timestamps = false;
    public function danhsachnhanvien()
    {
        return $this->belongsTo('App\nhanvien','nv_nguoilap','nv_ma');
    }
    public function danhsachsanpham()
    {
        return $this->hasOne('App\sanpham','sp_ma','sp_ma');
    }
}
