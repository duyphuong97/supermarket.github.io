<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltertableVanchuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vanchuyen', function (Blueprint $table) {
            $table->dropColumn(['vc_ten','vc_diengiai','vc_trangthai']);
            $table->string('tinhthanh',20)->comment('tỉnh thành phố việt nam');
            $table->string('quanhuyen',20)->comment('quận huyện việt nam');
            $table->string('phuongxa',20)->comment('phườn xã việt nam');
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
