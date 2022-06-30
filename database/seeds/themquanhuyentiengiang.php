<?php

use Illuminate\Database\Seeder;
use App\tinhthanh;
use App\quanhuyen;
class themquanhuyentiengiang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiengiang = tinhthanh::where('tt_ma', '27')->first();
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Cái Bè',
            'tt_ma'=> $tiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thị xã Cai Lậy',
            'tt_ma'=> $tiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Châu Thành',
            'tt_ma'=> $tiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Chợ Gạo',
            'tt_ma'=> $tiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thị xã Gò Công',
            'tt_ma'=> $tiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Gò Công Đông',
            'tt_ma'=> $tiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Gò Công Tây',
            'tt_ma'=> $tiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thành Phố Mỹ Tho',
            'tt_ma'=> $tiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tân Phú Đông',
            'tt_ma'=> $tiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tân Phước',
            'tt_ma'=> $tiengiang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Cai Lậy',
            'tt_ma'=> $tiengiang->tt_ma
        ]);
    }
}
