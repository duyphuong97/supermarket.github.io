<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableVanchuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vanchuyen', function (Blueprint $table) {
            $table->foreign('tt_ma')->references('tt_ma')->on('tinhthanh')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('qh_ma')->references('qh_ma')->on('quanhuyen')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('px_ma')->references('px_ma')->on('phuongxa')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vanchuyen', function (Blueprint $table) {
            //
        });
    }
}
