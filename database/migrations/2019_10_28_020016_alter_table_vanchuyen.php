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
            //
            $table->string('vc_thoigian',10)->comment('thời gian vận chuyển');
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
