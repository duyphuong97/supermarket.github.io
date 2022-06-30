<?php

use Illuminate\Database\Seeder;

class NhacungcapTableSeeder extends Seeder
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
        $ten = ["nhà cung cấp 1", "nhà cung cấp 2", "nhà cung cấp 3", "nhà cung cấp 4"];
        $diachi = ["đc1","đc2","đc3","đc4"];
        $dienthoai = ["0000000000","111111111","2222222222","3333333333","4444444444"];
        $email = ["ncc1@gmail.com","ncc1@gmai2.com","ncc3@gmail.com","ncc4@gmail.com"];
        sort($ten);
        for ($i=1; $i <= count($ten); $i++) {
            array_push($list, [
                'ncc_ma'      => $i,
                'ncc_ten'     => $ten[$i-1],
                'ncc_diaChi'  => $diachi[$i-1],
                'ncc_dienThoai' => $dienthoai[$i-1],
                'ncc_email'     => $email[$i-1]
            ]);
        }
        DB::table('nhacungcap')->insert($list);
    }
}
