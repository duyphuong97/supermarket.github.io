<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableQuanhuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quanhuyen', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('qh_ma')->autoIncrement()->comment('mã tỉnh thành phố');
            $table->string('qh_ten',20)->comment('quận huyện việt nam');
            $table->unsignedInteger('tt_ma')->comment('mã tỉnh thành phố');
            $table->foreign('tt_ma')->references('tt_ma')->on('tinhthanh')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quanhuyen');
    }
}
