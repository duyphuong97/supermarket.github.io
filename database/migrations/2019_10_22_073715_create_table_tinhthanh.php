<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTinhthanh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinhthanh', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('tt_ma')->autoIncrement()->comment('mã tỉnh thành phố');
            $table->string('tt_ten',20)->comment('tỉnh thành phố việt nam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tinhthanh');
    }
}
