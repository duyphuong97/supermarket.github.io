<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHinhsanphamlienquan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhsanphamlienquan', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('hsplq_ma')->autoIncrement()->comment('mã hình sản phẩm liên quan');
            $table->string('hsplq_ten',200)->comment('hình ảnh liên quan của sản phẩm');
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
        Schema::dropIfExists('hinhsanphamlienquan');
    }
}
