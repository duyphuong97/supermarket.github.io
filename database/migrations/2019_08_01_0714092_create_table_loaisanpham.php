<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLoaisanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaisanpham', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('lsp_ma')->autoIncrement()->comment('mã loại sản phẩm');
            $table->string('lsp_ten',50)->comment('tên loại sản phẩm');
            $table->timestamp('lsp_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật sản phẩm gần nhất');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaisanpham');
    }
}
