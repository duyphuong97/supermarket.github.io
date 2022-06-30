<?php

use Illuminate\Database\Seeder;
use App\tinhthanh;
use App\quanhuyen;
class themquanhuyensoctrang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soctrang = tinhthanh::where('tt_ma', '20')->first();
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Châu Thành',
            'tt_ma'=> $soctrang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Cù Lao Dung',
            'tt_ma'=> $soctrang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Kế Sách',
            'tt_ma'=> $soctrang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Long Phú',
            'tt_ma'=> $soctrang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Mỹ Tú',
            'tt_ma'=> $soctrang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Mỹ Xuyên',
            'tt_ma'=> $soctrang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thị xã Ngã Năm',
            'tt_ma'=> $soctrang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thành Phố Sóc Trăng',
            'tt_ma'=> $soctrang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Thạnh Trị',
            'tt_ma'=> $soctrang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thị xã Vĩnh Châu',
            'tt_ma'=> $soctrang->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Trần Đề',
            'tt_ma'=> $soctrang->tt_ma
        ]);
    }
}
