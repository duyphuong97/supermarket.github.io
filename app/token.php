<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class token extends Model
{
    //
    protected $table ='token';
    public $timestamps = false;
    protected $primaryKey = 'tk_ma';

}
