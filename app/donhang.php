<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    //
    protected $table = 'donhang';
    protected $primaryKey = 'dh_ma';
    public $timestamps = false;

    public function nguoixulydonhang(){
        return $this->belongsTo('App\nhanvien','nv_ma','nv_xuly');
    }
    public function nguoigiaohang(){
        return $this->belongsTo('App\nhanvien','nv_ma','nv_giaohang');
    }
    public function khachhang(){
        return $this->belongsTo('App\khachhang','kh_ma','kh_ma');
    }
    public function thanhtoan()
    {
        return $this->belongsTo('App\thanhtoan','dh_ma','dh_ma');
    }
    public function vanchuyen()
    {
        return $this->belongsTo('App\vanchuyen','vc_ma','vc_ma');
    }
    public function chitietdonhang()
    {
        return $this->hasOne('App\chitietdonhang','dh_ma','dh_ma');
    }
}
