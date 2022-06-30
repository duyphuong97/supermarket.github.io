<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableThanhtoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanhtoan', function (Blueprint $table) {
            $table->engine='Innodb';
            $table->unsignedInteger('tt_ma')->autoIncrement()->comment('mã thanh toán');
            $table->string('tt_ten')->comment('tên thanh toán');
            $table->text('tt_dienGiai')->comment('mô tả thanh toán');
            $table->tinyInteger('tt_trangThai')->comment('trạng tháy thanh toán (1-đã thanh toán, 2-chưa thanh toán');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thanhtoan');
    }
}
