<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserNhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_nhanvien', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->unsignedInteger('usnv_ma')->autoIncrement()->comment('mã tài khoản của nhân viên');
            $table->string('usnv_userName',50)->comment('tài khoản nhân viên');
            $table->string('usnv_pass')->comment('password tài khoản nhân viên');
            $table->string('usnv_ghinhodangnhap')->comment('gi nhớ đăng nhập');
            $table->rememberToken();
            $table->unsignedInteger('nv_ma')->comment('mã nhân viên của user');

            $table->foreign('nv_ma')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_nhanvien');
    }
}
