<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVanchuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanchuyen', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('vc_ma')->autoIncrement()->comment('mã vận chuyển');
            $table->string('vc_ten',250)->comment('tên vận chuyển');
            $table->integer('vc_chiphi')->default('0')->comment('chi phí vận chuyển');
            $table->text('vc_diengiai')->comment('thông tin về nhà vận chuyển');
            $table->integer('vc_trangthai')->default('1')->comment('1-khả dụng 2-Khóa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vanchuyen');
    }
}
