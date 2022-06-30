<?php

use Illuminate\Database\Seeder;
use App\tinhthanh;
use App\quanhuyen;
class themquanhuyentayninh extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tayninh = tinhthanh::where('tt_ma', '22')->first();
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Bến Cầu',
            'tt_ma'=> $tayninh->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Châu Thành',
            'tt_ma'=> $tayninh->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Hòa Thành',
            'tt_ma'=> $tayninh->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Dương Minh Châu',
            'tt_ma'=> $tayninh->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Gò Dầu',
            'tt_ma'=> $tayninh->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tân Biên',
            'tt_ma'=> $tayninh->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tân Châu',
            'tt_ma'=> $tayninh->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thành Phố Tây Ninh',
            'tt_ma'=> $tayninh->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Trảng Bàng',
            'tt_ma'=> $tayninh->tt_ma
        ]);
    }
}
