<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('sp_ma')->autoIncrement()->comment('mã sản phẩm');
            $table->string('sp_ten',50)->comment('tên sản phẩm');
            $table->integer('sp_giaBan');
            $table->string('sp_hinh',200)->comment('hình sản phẩm');
            $table->unsignedInteger('msp_ma')->comment('mã màu sản phẩm');
            $table->unsignedInteger('lsp_ma')->comment('mã loại sản phẩm');
            $table->unsignedInteger('ncc_ma')->comment('mã nhà cung cấp');
            $table->string('sp_gichu',200)->comment('toàn bộ thông tin chi tiết sản phẩm');
            $table->timestamp('sp_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật sản phẩm gần nhất');

            $table->foreign('msp_ma')->references('msp_ma')->on('mausanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('lsp_ma')->references('lsp_ma')->on('loaisanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('ncc_ma')->references('ncc_ma')->on('nhacungcap')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
