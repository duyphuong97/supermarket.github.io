<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKhuyenmaisanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmaisanpham', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('kmsp_ma')->autoIncrement()->comment('mã khuyến mải sản phẩm');
            $table->text('kmsp_noidung')->comment('nọi dung khuyến mải');
            $table->unsignedInteger('sp_ma')->comment('mã sản phẩm được khuyến mải');
            $table->unsignedInteger('msp_ma')->comment('mã màu sản phẩm khuyến mải');
            $table->string('kmsp_giatri',10)->nullable()->default(NULL)->comment('giá trị khuyến mải của sản phẩm');
            $table->dateTime('kmsp_ngaybatdau')->default(DB::raw('current_timestamp'));
            $table->dateTime('kmsp_ngayketthuc')->comment('ngày kết thúc khuyến mải');
            $table->integer('kmsp_trangthai')->default('2')->comment('trạng  thái khuyến mải(1 khả dụng 2 khóa)');
            $table->unsignedInteger('nv_nguoilap')->comment('người lập khuyến mải');
            $table->dateTime('kmsp_ngaylap')->comment('ngày lập khuyến mải');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('msp_ma')->references('msp_ma')->on('mausanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('nv_nguoilap')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmaisanpham');
    }
}
