<?php

use Illuminate\Database\Seeder;
use App\tinhthanh;
use App\quanhuyen;
class themquanhuyenvinhlong extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vinhlong = tinhthanh::where('tt_ma', '29')->first();
        $qh = quanhuyen::create([
            'qh_ten' => 'Thị Xã Bình Minh',
            'tt_ma'=> $vinhlong->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Bình Tân',
            'tt_ma'=> $vinhlong->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Long Hồ',
            'tt_ma'=> $vinhlong->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Mang Thít',
            'tt_ma'=> $vinhlong->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tam Bình',
            'tt_ma'=> $vinhlong->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Trà Ôn',
            'tt_ma'=> $vinhlong->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thành Phố Vĩnh Long',
            'tt_ma'=> $vinhlong->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Vũng Liêm',
            'tt_ma'=> $vinhlong->tt_ma
        ]);
        
    }
}
