<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhuongxa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phuongxa', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('px_ma')->autoIncrement()->comment('mã tỉnh thành phố');
            $table->string('px_ten',20)->comment('phường xã việt nam');
            $table->unsignedInteger('qh_ma')->comment('mã quận huyện');
            $table->foreign('qh_ma')->references('qh_ma')->on('quanhuyen')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phuongxa');
    }
}
