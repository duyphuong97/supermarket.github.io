<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('nv_ma')->autoIncrement()->comment('Mã nhân viên, 1-chưa phân công');
            $table->string('nv_ten', 100)->comment('Họ tên # Họ tên');
            $table->string('nv_gioiTinh',5)->default('Nam')->comment('Giới tính # Giới tính: 0-Nữ, 1-Nam, 2-Khác');
            $table->string('nv_email', 100)->comment('Email # Email');
            $table->dateTime('nv_ngaySinh')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Ngày sinh # Ngày sinh');
            $table->string('nv_diaChi', 250)->comment('Địa chỉ # Địa chỉ');
            $table->string('nv_dienThoai', 11)->comment('Điện thoại # Điện thoại');
            $table->tinyInteger('nv_trangThai')->default('2')->comment('Trạng thái # Trạng thái nhân viên: 1-khóa, 2-khả dụng');
            $table->unsignedInteger('q_ma')->comment('Quyền # Mã quyền: 1-Giám đốc, 2-Quản trị, 3-Quản lý kho, 4-Kế toán, 5-Nhân viên bán hàng, 6-Nhân viên giao hàng');

            $table->foreign('q_ma')->references('q_ma')->on('quyen')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
