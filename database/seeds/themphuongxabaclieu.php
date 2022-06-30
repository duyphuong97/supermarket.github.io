<?php

use Illuminate\Database\Seeder;
use App\quanhuyen;
use App\phuongxa;

class themphuongxabaclieu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tpbaclieu = quanhuyen::where('qh_ma', '59')->first();
        $huyendonghai = quanhuyen::where('qh_ma', '60')->first();
        $thixagiarai = quanhuyen::where('qh_ma', '61')->first();
        $huyenhoabinh = quanhuyen::where('qh_ma', '62')->first();
        $huyenhongdan = quanhuyen::where('qh_ma', '63')->first();
        $huyenphuoclong = quanhuyen::where('qh_ma', '64')->first();
        $huyenvinhloi = quanhuyen::where('qh_ma', '65')->first();



        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $tpbaclieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $tpbaclieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $tpbaclieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $tpbaclieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $tpbaclieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Trạch Đông',
            'qh_ma'=> $tpbaclieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Nhà Mát',
            'qh_ma'=> $tpbaclieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hiệp Thành',
            'qh_ma'=> $tpbaclieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Trạch',
            'qh_ma'=> $tpbaclieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $tpbaclieu->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Gành Hào',
            'qh_ma'=> $huyendonghai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Phúc',
            'qh_ma'=> $huyendonghai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Trạch',
            'qh_ma'=> $huyendonghai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Trạch A',
            'qh_ma'=> $huyendonghai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Điền Hải',
            'qh_ma'=> $huyendonghai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Điền Tây',
            'qh_ma'=> $huyendonghai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Định Thành A',
            'qh_ma'=> $huyendonghai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Điền',
            'qh_ma'=> $huyendonghai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Điền Đông',
            'qh_ma'=> $huyendonghai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Điền Đông A',
            'qh_ma'=> $huyendonghai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Định Thành',
            'qh_ma'=> $huyendonghai->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Giá Rai',
            'qh_ma'=> $thixagiarai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Hộ Phòng',
            'qh_ma'=> $thixagiarai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Tân',
            'qh_ma'=> $thixagiarai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Thạnh',
            'qh_ma'=> $thixagiarai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Thạnh A',
            'qh_ma'=> $thixagiarai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Thạnh Đông',
            'qh_ma'=> $thixagiarai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Giá Rai',
            'qh_ma'=> $thixagiarai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Thạnh Tây',
            'qh_ma'=> $thixagiarai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phong',
            'qh_ma'=> $thixagiarai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thạnh',
            'qh_ma'=> $thixagiarai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 01',
            'qh_ma'=> $thixagiarai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Láng Tròn',
            'qh_ma'=> $thixagiarai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Thạnh Đông A',
            'qh_ma'=> $thixagiarai->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Hòa Bình',
            'qh_ma'=> $huyenhoabinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Minh Diệu',
            'qh_ma'=> $huyenhoabinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Bình',
            'qh_ma'=> $huyenhoabinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Thịnh',
            'qh_ma'=> $huyenhoabinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hậu A',
            'qh_ma'=> $huyenhoabinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Mỹ A',
            'qh_ma'=> $huyenhoabinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Mỹ B',
            'qh_ma'=> $huyenhoabinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hậu',
            'qh_ma'=> $huyenhoabinh->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Ngan Dừa',
            'qh_ma'=> $huyenhongdan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lộc Ninh',
            'qh_ma'=> $huyenhongdan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ninh Thạnh Lợi A',
            'qh_ma'=> $huyenhongdan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ninh Hòa',
            'qh_ma'=> $huyenhongdan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ninh Quới',
            'qh_ma'=> $huyenhongdan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phong Thạnh Nam',
            'qh_ma'=> $huyenhongdan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ninh Thạnh Lợi',
            'qh_ma'=> $huyenhongdan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Lộc',
            'qh_ma'=> $huyenhongdan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Lộc A',
            'qh_ma'=> $huyenhongdan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ninh Quới A',
            'qh_ma'=> $huyenhongdan->qh_ma
        ]);


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Phước Long',
            'qh_ma'=> $huyenphuoclong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Phú',
            'qh_ma'=> $huyenphuoclong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Thạnh Tây A',
            'qh_ma'=> $huyenphuoclong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Thanh',
            'qh_ma'=> $huyenphuoclong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Long',
            'qh_ma'=> $huyenphuoclong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Phú Đông',
            'qh_ma'=> $huyenphuoclong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Phú Tây',
            'qh_ma'=> $huyenphuoclong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Thạnh Tây B',
            'qh_ma'=> $huyenphuoclong->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Châu Hưng',
            'qh_ma'=> $huyenvinhloi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Châu Hưng A',
            'qh_ma'=> $huyenvinhloi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Châu Thới',
            'qh_ma'=> $huyenvinhloi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Hội',
            'qh_ma'=> $huyenvinhloi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Mỹ B',
            'qh_ma'=> $huyenvinhloi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Thạnh',
            'qh_ma'=> $huyenvinhloi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hưng',
            'qh_ma'=> $huyenvinhloi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hưng A',
            'qh_ma'=> $huyenvinhloi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hậu A',
            'qh_ma'=> $huyenvinhloi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Thành',
            'qh_ma'=> $huyenvinhloi->qh_ma
        ]);
       
    }
}
