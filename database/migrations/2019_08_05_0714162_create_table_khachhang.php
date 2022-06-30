<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKhachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('kh_ma')->autoIncrement()->comment('mã khách hàng');
            $table->string('kh_hoTen',50)->comment('họ tên khách hàng');
            $table->string('kh_gioiTinh',4)->comment('giới tính hách hàng');
            $table->string('kh_diaChi',100)->comment('địa chỉ khách hàng');
            $table->string('kh_dienThoai',10)->comment('điện thoại khác hàng');
            $table->string('kh_email',50)->comment('email khách hàng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
