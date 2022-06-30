<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\View\Engines\Engine;

class CreateTableHinhanh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanh', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('ha_ma')->autoIncrement()->comment('mã hình ảnh');
            $table->string('na_ten')->comment('tên hình ảnh');
            $table->unsignedInteger('sp_ma')->comment('mã sản phẩm');

            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinhanh');
    }
}
