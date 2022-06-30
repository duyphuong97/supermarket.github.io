<?php

use Illuminate\Database\Seeder;
use App\quanhuyen;
use App\phuongxa;
class themphuongxatiengiang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $huyencaibe = quanhuyen::where('qh_ma', '104')->first();
        $thixacailay = quanhuyen::where('qh_ma', '105')->first();
        $huyenchauthanh = quanhuyen::where('qh_ma', '106')->first();
        $huyenchogao = quanhuyen::where('qh_ma', '107')->first();
        $thixagocong = quanhuyen::where('qh_ma', '108')->first();
        $huyengocongdong = quanhuyen::where('qh_ma', '109')->first();
        $huyengocongtay = quanhuyen::where('qh_ma', '110')->first();
        $tpmytho = quanhuyen::where('qh_ma', '111')->first();
        $huyentanphudong = quanhuyen::where('qh_ma', '112')->first();
        $huyentanphuoc = quanhuyen::where('qh_ma', '113')->first();
        $huyencailay = quanhuyen::where('qh_ma', '114')->first();



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Cái Bè',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Lợi B',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Hữu',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thái Đông',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thái Trung',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Hòa Hiệp',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hậu Mỹ Bắc A',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hậu Mỹ Bắc B',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hậu Mỹ Phú',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hậu Mỹ Trinh',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hậu Thành',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Hưng',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Khánh',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Đức Đông',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Đức Tây',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Hội',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Lợi A',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Lương',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Tân',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Trung',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hưng',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thanh',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thiện Trí',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thiện Trung',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Cư',
            'qh_ma'=> $huyencaibe->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Cai Lậy',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 05',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 04',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 03',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 02',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 01',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Hạnh Đông',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Hạnh Trung',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Phước Tây',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Nhị Mỹ',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhị Quý',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Quý',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Bình',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phong',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phú',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hội',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thanh Hòa',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Khánh',
            'qh_ma'=> $thixacailay->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Xã Bàn Long',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lý Tây',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Phú',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Hưng',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Trưng',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Hòa',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hữu Đạo',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhị Bình',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lý Đông',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hương',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hội Đông',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Điềm Hy',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thân Cửu Nghĩa',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Phong',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Kim Sơn',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Song Thuận',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Đức',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Dưỡng Điềm',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long An',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tam Hiệp',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Định',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hiệp',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Kim',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Chợ Gạo',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Xuân Đông',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Ninh',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Phan',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Phục Nhứt',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đăng Hưng Phước',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Định',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Tịnh',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Bình Điền',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lương Hòa Lạc',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Tịnh An',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Kiết',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Quơn Long',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Song Bình',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Bình Thạnh',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thuận Bình',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thanh Bình',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Hòa',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thạnh Thủy',
            'qh_ma'=> $huyenchogao->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $thixagocong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $thixagocong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $thixagocong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $thixagocong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $thixagocong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Trung',
            'qh_ma'=> $thixagocong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Xuân',
            'qh_ma'=> $thixagocong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Chánh',
            'qh_ma'=> $thixagocong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Hòa',
            'qh_ma'=> $thixagocong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Hưng',
            'qh_ma'=> $thixagocong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Thuận',
            'qh_ma'=> $thixagocong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Đông',
            'qh_ma'=> $thixagocong->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Tân Hòa',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình ân',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Nghị',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Gia Thuận',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Kiểng Phước',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Trung',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Đông',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Đông',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phước',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Tây',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thành',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tăng Hoà',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vàm Láng',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Điền',
            'qh_ma'=> $huyengocongdong->qh_ma
        ]);
        



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Vĩnh Bình',
            'qh_ma'=> $huyengocongtay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Nhì',
            'qh_ma'=> $huyengocongtay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Phú',
            'qh_ma'=> $huyengocongtay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Tân',
            'qh_ma'=> $huyengocongtay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đồng Sơn',
            'qh_ma'=> $huyengocongtay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đồng Thạnh',
            'qh_ma'=> $huyengocongtay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Yên Luông',
            'qh_ma'=> $huyengocongtay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Vĩnh',
            'qh_ma'=> $huyengocongtay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thành Công',
            'qh_ma'=> $huyengocongtay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Nhựt',
            'qh_ma'=> $huyengocongtay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Trị',
            'qh_ma'=> $huyengocongtay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hựu',
            'qh_ma'=> $huyengocongtay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Bình',
            'qh_ma'=> $huyengocongtay->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 10',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới Sơn',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phước Thạnh',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Long',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đạo Thạnh',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Phong',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Mỹ Chánh',
            'qh_ma'=> $tpmytho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung An',
            'qh_ma'=> $tpmytho->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Tân',
            'qh_ma'=> $huyentanphudong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Đông',
            'qh_ma'=> $huyentanphudong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phú',
            'qh_ma'=> $huyentanphudong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thạnh',
            'qh_ma'=> $huyentanphudong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Thạnh',
            'qh_ma'=> $huyentanphudong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thới',
            'qh_ma'=> $huyentanphudong->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lập 1',
            'qh_ma'=> $huyentanphuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Mỹ Phước',
            'qh_ma'=> $huyentanphuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lập 2',
            'qh_ma'=> $huyentanphuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hòa Tây',
            'qh_ma'=> $huyentanphuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Phước',
            'qh_ma'=> $huyentanphuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Thạnh',
            'qh_ma'=> $huyentanphuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Mỹ',
            'qh_ma'=> $huyentanphuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Tân',
            'qh_ma'=> $huyentanphuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hòa Đông',
            'qh_ma'=> $huyentanphuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Lập',
            'qh_ma'=> $huyentanphuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hòa Thành',
            'qh_ma'=> $huyentanphuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Mỹ',
            'qh_ma'=> $huyentanphuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Hoà',
            'qh_ma'=> $huyentanphuoc->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Phú',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Lộc',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hiệp Đức',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hội Xuân',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Tiên',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Trung',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Long',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thành Bắc',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thành Nam',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ngũ Hiệp',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú An',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Cường',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Nhuận',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tam Bình',
            'qh_ma'=> $huyencailay->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Cẩm Sơn',
            'qh_ma'=> $huyencailay->qh_ma
        ]);



        
    }
}
