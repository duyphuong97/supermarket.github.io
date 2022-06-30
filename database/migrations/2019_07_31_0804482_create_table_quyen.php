<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableQuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quyen', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('q_ma')->autoIncrement()->comment('mã quyền');
            $table->string('q_ten',100)->comment('tên quyền');
            $table->tinyInteger('q_trangThai')->default('1')->comment('trạng thái của quyền(1-khả dụng,2-khóa)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quyen');
    }
}
