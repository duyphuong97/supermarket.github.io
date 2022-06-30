<?php

use Illuminate\Database\Seeder;
use App\tinhthanh;
use App\quanhuyen;
class themquanhuyenbaclieu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $baclieu = tinhthanh::where('tt_ma', '39')->first();
        $qh = quanhuyen::create([
            'qh_ten' => 'Thành Phố Bạc Liêu',
            'tt_ma'=> $baclieu->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Đông Hải',
            'tt_ma'=> $baclieu->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thị xã Giá Rai',
            'tt_ma'=> $baclieu->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Hòa Bình',
            'tt_ma'=> $baclieu->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Hồng Dân',
            'tt_ma'=> $baclieu->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Phước Long',
            'tt_ma'=> $baclieu->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Vĩnh Lợi',
            'tt_ma'=> $baclieu->tt_ma
        ]);
    }
}
