<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
    //
    protected $table ='loaisanpham';
    protected $primaryKey = 'lsp_ma';
    public $timestamps = false;

    public function loaisanpham(){
        return $this->hasMany('App\sanpham','lsp_ma','lsp_ma');
    }
}
