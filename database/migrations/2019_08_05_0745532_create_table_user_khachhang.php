<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserKhachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_khachhang', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('uskh_id')->autoIncrement()->comment('id tài khoản khách hàng');
            $table->string('uskh_userName',50)->comment('username của khách hàng');
            $table->string('uskh_pass',20)->comment('mật khẩu của khách hàng');
            $table->string('uskh_ghinhodangnhap')->comment('ghi nhớ đăng nhấp');
            $table->rememberToken();
            $table->unsignedInteger('kh_ma')->comment('mã khách hàng');

            $table->foreign('kh_ma')->references('kh_ma')->on('khachhang')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_khachhang');
    }
}
