<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDathangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dathang', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('dh_ma')->autoIncrement()->comment('đặt hàng');
            $table->unsignedInteger('sp_ma')->comment('mã sản phẩm');
            $table->integer('dh_soluong')->comment('số lượng sản phẩm');
            $table->integer('dh_dongia')->default('0')->comment('đơn giá đặt hàng');
            $table->integer('dh_token')->default('0')->comment('token đặt hàng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dathang');
    }
}
