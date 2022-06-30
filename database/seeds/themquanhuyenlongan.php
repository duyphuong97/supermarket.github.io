<?php

use Illuminate\Database\Seeder;
use App\tinhthanh;
use App\quanhuyen;
class themquanhuyenlongan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $longan = tinhthanh::where('tt_ma', '8')->first();
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Bến Lức',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Cần Đước',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Cần Giuộc',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Châu Thành',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Đức Hòa',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Đức Huệ',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Mộc Hóa',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thành Phố Tân An',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tân Hưng',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tân Thạnh',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Tân Trụ',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Thạnh Hóa',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Thủ Thừa',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Vĩnh Hưng',
            'tt_ma'=> $longan->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thị xã Kiến Tường',
            'tt_ma'=> $longan->tt_ma
        ]);
    }
}
