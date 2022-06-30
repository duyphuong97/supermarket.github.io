<?php

use Illuminate\Database\Seeder;
use App\tinhthanh;
use App\quanhuyen;
class themquanhuyendongthap extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dongthap = tinhthanh::where('tt_ma', '53')->first();
        $qh = quanhuyen::create([
            'qh_ten' => 'Thành Phố Cao Lãnh',
            'tt_ma'=> $dongthap->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Cao Lãnh',
            'tt_ma'=> $dongthap->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Châu Thành',
            'tt_ma'=> $dongthap->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Hồng Ngự',
            'tt_ma'=> $dongthap->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thị xã Hồng Ngự',
            'tt_ma'=> $dongthap->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Lai Vung',
            'tt_ma'=> $dongthap->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Lấp Vò',
            'tt_ma'=> $dongthap->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Tp. Sa Đéc',
            'tt_ma'=> $dongthap->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tam Nông',
            'tt_ma'=> $dongthap->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tân Hồng',
            'tt_ma'=> $dongthap->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Thanh Bình',
            'tt_ma'=> $dongthap->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tháp Mười',
            'tt_ma'=> $dongthap->tt_ma
        ]);

    }
}
