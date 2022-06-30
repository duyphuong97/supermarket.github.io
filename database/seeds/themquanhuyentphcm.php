<?php

use Illuminate\Database\Seeder;
use App\tinhthanh;
use App\quanhuyen;
class themquanhuyentphcm extends Seeder
{
 
    public function run()
    {
       $hcm = tinhthanh::where('tt_ma', '32')->first();
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận 1',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận 2',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận 3',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận 4',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận 5',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận 6',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận 7',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận 8',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận 9',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận 10',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận 11',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận 12',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận Tân Bình',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận Tân Phú',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận Phú Nhuận',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận Gò Vấp',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận Bình Thạnh',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận Thủ Đức',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận Bình Tân',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Hóc Môn',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Củ Chi',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Nhà Bè',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Bình Chánh',
            'tt_ma'=> $hcm->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Cần Giờ',
            'tt_ma'=> $hcm->tt_ma
        ]);

    }
}



