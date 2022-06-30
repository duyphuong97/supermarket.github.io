<?php

use Illuminate\Database\Seeder;
use App\tinhthanh;
use App\quanhuyen;
class themquanhuyenbentre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bentre = tinhthanh::where('tt_ma', '41')->first();
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Ba Tri',
            'tt_ma'=> $bentre->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thành Phố Bến Tre',
            'tt_ma'=> $bentre->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Bình Đại',
            'tt_ma'=> $bentre->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Châu Thành',
            'tt_ma'=> $bentre->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Chợ Lách',
            'tt_ma'=> $bentre->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Giồng Trôm',
            'tt_ma'=> $bentre->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Mỏ Cày Bắc',
            'tt_ma'=> $bentre->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Mỏ Cày Nam',
            'tt_ma'=> $bentre->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Thạnh Phú',
            'tt_ma'=> $bentre->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Mỏ Cày',
            'tt_ma'=> $bentre->tt_ma
        ]);
    }
}
