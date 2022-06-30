<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    //
    protected $table ='khachhang';
    protected $primaryKey = 'kh_token';
    public $timestamps = false;
    public function khachhang(){
        return $this->hasOne('App\donhang','kh_ma','kh_ma');
    }
}
