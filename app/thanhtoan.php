<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thanhtoan extends Model
{
    //
    protected $table ='thanhtoan';
    protected $primaryKey = 'tt_ma';
    public $timestamps = false;

    public function thanhtoan(){
        return $this->hasOne('App\donhang','tt_ma','tt_ma');
    }
}
