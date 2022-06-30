<?php

use App\vanchuyen;
use Illuminate\Database\Seeder;

class vanchuyenseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vc = vanchuyen::create([
            'tinhthanh' => 'Cần Thơ',
            'quanhuyen' => 'Huyện Phong Điền',
            'phuongxa' => 'Thị Trấn Phong Điền',
            'vc_chiphi'=>'25000',
        ]);
        $vc = vanchuyen::create([
            'tinhthanh' => 'Cần Thơ',
            'quanhuyen' => 'Huyện Phong Điền',
            'phuongxa' => 'Xã Giai Xuân',
            'vc_chiphi'=>'25000',
        ]);
        $vc = vanchuyen::create([
            'tinhthanh' => 'Cần Thơ',
            'quanhuyen' => 'Huyện Phong Điền',
            'phuongxa' => 'Xã Mỹ Khánh',
            'vc_chiphi'=>'30000',
        ]);
        $vc = vanchuyen::create([
            'tinhthanh' => 'Cần Thơ',
            'quanhuyen' => 'Huyện Phong Điền',
            'phuongxa' => 'Xã Trường Long',
            'vc_chiphi'=>'15000',
        ]);
        $vc = vanchuyen::create([
            'tinhthanh' => 'Cần Thơ',
            'quanhuyen' => 'Huyện Phong Điền',
            'phuongxa' => 'Xã Nhơn Nghĩa',
            'vc_chiphi'=>'15000',
        ]);
        $vc = vanchuyen::create([
            'tinhthanh' => 'Cần Thơ',
            'quanhuyen' => 'Huyện Phong Điền',
            'phuongxa' => 'Xã Tân Thới',
            'vc_chiphi'=>'20000',
        ]);
        $vc = vanchuyen::create([
            'tinhthanh' => 'Cần Thơ',
            'quanhuyen' => 'Huyện Phong Điền',
            'phuongxa' => 'Xã Nhơn ái',
            'vc_chiphi'=>'15000',
        ]);
    }
}
