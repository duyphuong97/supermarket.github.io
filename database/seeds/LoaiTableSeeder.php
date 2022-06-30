<?php

use Illuminate\Database\Seeder;

class LoaiTableSeeder extends Seeder
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
        $types = ["Hoa lẻ", "Phụ liệu", "Bó hoa", "Giỏ hoa", "Hoa hộp giấy", "Kệ hoa", "Vòng hoa", "Bình hoa", "Hoa hộp gỗ"];
        sort($types);
        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'lsp_ma'      => $i,
                'lsp_ten'     => $types[$i-1]
            ]);
        }
        DB::table('loaisanpham')->insert($list);
    }
}
