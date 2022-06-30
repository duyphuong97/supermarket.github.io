<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChitietdonhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chititedonhang', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('ctdh_ma')->autoIncrement()->comment('mã chi tết đơn hàng');
            $table->unsignedInteger('sp_ma')->comment('mã sản phẩm');
            $table->unsignedInteger('msp_ma')->comment('mã màu sản phẩm');
            $table->unsignedInteger('dh_ma')->comment('mã đơn hàng');
            $table->integer('ctdh_soluong')->comment('số lượng sản phẩm');
            $table->integer('ctdh_dongia')->default('0')->comment('đơn giá đơn hàng');

            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('dh_ma')->references('dh_ma')->on('donhang')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('msp_ma')->references('msp_ma')->on('mausanpham')->onDelete('CASCADE')->onUpdate('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chititedonhang');
    }
}
