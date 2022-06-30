<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMausanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mausanpham', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('msp_ma')->autoIncrement()->comment('mã màu sản phẩm');
            $table->string('msp_ten',20)->comment('tên màu sản phẩm');
            $table->string('msp_hinh',200)->comment('hình màu của sản phẩm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mausanpham');
    }
}
