<?php

use Illuminate\Database\Seeder;
use App\tinhthanh;
use App\quanhuyen;
class themquanhuyenangiang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $angiang = tinhthanh::where('tt_ma', '35')->first();
        $qh = quanhuyen::create([
            'qh_ten' => 'Thành Phố Châu Đốc',
            'tt_ma'=> $angiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Châu Thành',
            'tt_ma'=> $angiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Chợ Mới',
            'tt_ma'=> $angiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tri Tôn',
            'tt_ma'=> $angiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tịnh Biên',
            'tt_ma'=> $angiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Thoại Sơn',
            'tt_ma'=> $angiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Châu Phú',
            'tt_ma'=> $angiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Phú Tân',
            'tt_ma'=> $angiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện An Phú',
            'tt_ma'=> $angiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thị xã Tân Châu',
            'tt_ma'=> $angiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'TP. Long Xuyên',
            'tt_ma'=> $angiang->tt_ma
        ]);

    }
}
