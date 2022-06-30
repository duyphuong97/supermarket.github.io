<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quyen extends Model
{
    //
    public $timestamps = false;
    protected $table      = 'quyen';
    protected $date       = ['q_taoMoi , q_capNhat'];
    protected $fillable   = ['q_ma','q_ten','q_trangThai','q_capNhat','q_taoMoi'];
    protected $dateFormat = 'Y-m-d';
    protected $primaryKey = 'q_ma';

    public function danhsachnhanvien(){
        return $this->hasOne('App\nhanvien','q_ma','q_ma');
    }
}
