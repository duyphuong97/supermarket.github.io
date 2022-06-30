<?php

use Illuminate\Database\Seeder;
use App\tinhthanh;
use App\quanhuyen;
class themquanhuyencamau extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camau = tinhthanh::where('tt_ma', '46')->first();
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Ngọc Hiển',
            'tt_ma'=> $camau->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Năm Căn',
            'tt_ma'=> $camau->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện U Minh',
            'tt_ma'=> $camau->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Cái Nước',
            'tt_ma'=> $camau->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Đầm Dơi',
            'tt_ma'=> $camau->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Thới Bình',
            'tt_ma'=> $camau->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Phú Tân',
            'tt_ma'=> $camau->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Huyện Trần Văn Thời',
            'tt_ma'=> $camau->tt_ma
        ]);
        $qh = quanhuyen::create([
            'qh_ten' => 'Thành Phố Cà Mau',
            'tt_ma'=> $camau->tt_ma
        ]);

    }
}
