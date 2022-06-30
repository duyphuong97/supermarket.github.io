<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableToken1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token1', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('tk1_ma')->autoIncrement()->comment('ma token');
            $table->tinyInteger('tk1')->default('4')->comment('default');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('token1');
    }
}
