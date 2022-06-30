<?php

use Illuminate\Database\Seeder;
use App\tinhthanh;
use App\quanhuyen;
class themquanhuyenkiengiang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kiengiang = tinhthanh::where('tt_ma', '2')->first();
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Kiên Lương',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thị xã Hà Tiên',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Hòn Đất',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Giồng Riềng',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện An Biên',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Gò Quao',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tân Hiệp',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Vĩnh Thuận',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện An Minh',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Châu Thành',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Kiên Hải',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Phú Quốc',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thành Phố Rạch Giá',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện U Minh Thượng',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Giang Thành',
            'tt_ma'=> $kiengiang->tt_ma
        ]);
    }
}
