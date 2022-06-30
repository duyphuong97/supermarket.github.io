<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDonhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('dh_ma')->autoIncrement()->comment('mã đơn hàng');
            $table->unsignedInteger('kh_ma')->comment('mã khách hàng');
            $table->dateTime('dh_thoigiandathang')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm đặt hàng # Thời điểm đặt hàng');
            $table->dateTime('dh_thoigiannhanhang')->comment('Thời gian nhận hàng');
            $table->string('dh_nguoinhan',100)->comment('người nhân hàng');
            $table->string('dh_diachi')->comment('địa điểm nhân hàng');
            $table->string('dh_nguoigui')->comment('người gửi');
            $table->text('dh_loichuc')->nullable()->default(NULL)->comment('lới chúc khách hàng');
            $table->integer('dh_dathanhtoan')->default('0')->comment('đã thanh toán');
            $table->unsignedInteger('nv_xuly')->default('1')->comment('người xử lý đơn hàng (1-chưa phân công)');
            $table->dateTime('hd_ngayxuly')->nullable()->default(NULL)->comment('ngày xủ lý đơn hàng');
            $table->unsignedInteger('nv_giaohang')->default('1') ->comment('ngươi giao hàng 1 chưa phân công');
            $table->unsignedInteger('hd_trangthai')->default('1')->comment('trạng thái đơn hàng 1-nhận đơn, 2-xử lý đơn, 3-giao hàng, 4-hoàn tất,5-hủy');
            $table->unsignedInteger('tt_ma')->comment('mã thanh toán');
            $table->unsignedInteger('vc_ma')->comment('mã vận chuyển');

            $table->foreign('kh_ma')->references('kh_ma')->on('khachhang')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('nv_xuly')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('nv_giaohang')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('tt_ma')->references('tt_ma')->on('thanhtoan')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('vc_ma')->references('vc_ma')->on('vanchuyen')->onDelete('CASCADE')->onUpdate('CASCADE');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
