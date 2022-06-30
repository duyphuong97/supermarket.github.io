<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNhacungcap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('ncc_ma')->autoIncrement()->comment('mã nhà cung cấp');
            $table->string('ncc_ten',50)->comment('tên nhà cung cấp');
            $table->string('ncc_diaChi',100)->comment('địa chỉ nhà cung cấp');
            $table->string('ncc_dienThoai',10)->comment('số điện thoại nhà cung cấp');
            $table->string('ncc_email',50)->comment('email nhà cung cấp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhacungcap');
    }
}
