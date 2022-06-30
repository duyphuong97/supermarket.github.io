<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_nhanvien extends Model
{
    protected $table      = 'user_nhanvien';
    protected $date       = ['taomoi , capnhat'];
    protected $fillable   =['usnv_ma','usnv_userName','usnv_pass','usnv_ginhodangnhap','taoMoi','capNhat','nv_ma'];
    protected $dateFormat = 'Y-m-d';
    protected $primaryKey = 'usnv_ma';
    public $timestamps = false;

    public function user_quyen(){
        return $this->belongsTo('App\nhanvien','nv_ma','nv_ma');
    }
}
