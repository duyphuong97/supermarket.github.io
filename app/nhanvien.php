<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    //
    protected $table      = 'nhanvien';
    protected $dateFormat = 'Y-m-d';
    protected $primaryKey = 'nv_ma';
    public $timestamps = false;
    public function danhsachquyen()
    {
        return $this->belongsTo('App\quyen','q_ma','q_ma');
    }
    public function user_nhanvien(){
        return $this->hasOne('App\user_nhanvien','usnv_ma','usnv_ma');
    }
    public function nguoixulydonhang(){
        return $this->hasMany('APP\donhang','nv_xuly','nv_ma');
    }
    public function nguoigiaohang(){
        return $this->hasMany('App\donhang','nv_giaohang','nv_ma');
    }
}
