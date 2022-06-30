<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mausanpham extends Model
{
    //
    protected $table  ='mausanpham';
    protected $primaryKey = 'msp_ma';
    public $timestamps = false;

    public function chitietdonhang()
    {
        return $this->hasOne('App\chitietdonhang','msp_ma','msp_ma');
    }

}
