<?php

use App\sanpham;

namespace App;


use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    //
    protected $table ='sanpham';
    protected $primaryKey = 'sp_ma';
    public $timestamps = false;

    public function mausanpham(){
        return$this->belongsTo('App\mausanpham','msp_ma','msp_ma');
    }
    public function loaisanpham(){
        return $this->belongsTo('App\loaisanpham','lsp_ma','lsp_ma');
    }
    public function nhacungcap(){
        return $this->belongsTo('App\nhacungcap','ncc_ma','ncc_ma');
    }
    public function khuyenmai(){
        return $this->belongsTo('App\khuyenmaisanpham','kmsp_ma','kmsp_ma');
    }
    public function chitietdonhang()
    {
        return $this->hasOne('App\chitietdonhang','sp_ma','sp_ma');
    }
}
