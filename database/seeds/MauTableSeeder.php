<?php

use Illuminate\Database\Seeder;

class MauTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $list = [];
        $mau = ["Trắng","Đen","Đỏ","Vàng","Xanh lá","Xanh dương","Cam","Tiếm"];

        sort($mau);
        for ($i=1; $i <= count($mau); $i++) {
            array_push($list, [
                'msp_ma'      => $i,
                'msp_ten'     => $mau[$i-1],
                'msp_hinh'    =>$mau[$i-1]
            ]);
        }
        DB::table('mausanpham')->insert($list);
    }
}
