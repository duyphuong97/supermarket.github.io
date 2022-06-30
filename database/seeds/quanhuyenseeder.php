<?php

use Illuminate\Database\Seeder;
use App\tinhthanh;
use App\quanhuyen;
class quanhuyenseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cantho = tinhthanh::where('tt_ma', '47')->first();
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận Thốt Nốt',
            'tt_ma'=> $cantho->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận Ninh Kiều',
            'tt_ma'=> $cantho->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận Bình Thủy',
            'tt_ma'=> $cantho->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận Cái Răng',
            'tt_ma'=> $cantho->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Quận Ô Môn',
            'tt_ma'=> $cantho->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Phong Điền',
            'tt_ma'=> $cantho->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Cờ Đỏ',
            'tt_ma'=> $cantho->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Vĩnh Thạnh',
            'tt_ma'=> $cantho->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Thới Lai',
            'tt_ma'=> $cantho->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Vị Thủy',
            'tt_ma'=> $cantho->tt_ma
        ]);

    }
}
