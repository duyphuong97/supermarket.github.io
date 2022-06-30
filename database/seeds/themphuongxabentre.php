<?php

use Illuminate\Database\Seeder;
use App\quanhuyen;
use App\phuongxa;
class themphuongxabentre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $huyenbatri = quanhuyen::where('qh_ma', '75')->first();
        $tpbentre = quanhuyen::where('qh_ma', '76')->first();
        $huyenbinhdai = quanhuyen::where('qh_ma', '77')->first();
        $huyenchauthanh = quanhuyen::where('qh_ma', '78')->first();
        $huyencholach = quanhuyen::where('qh_ma', '79')->first();
        $huyengiongchom = quanhuyen::where('qh_ma', '80')->first();
        $huyenmocaybac = quanhuyen::where('qh_ma', '81')->first();
        $huyenmocaynam = quanhuyen::where('qh_ma', '82')->first();
        $huyenthanhphu = quanhuyen::where('qh_ma', '83')->first();
        $huyenmocay = quanhuyen::where('qh_ma', '84')->first();


        $px = phuongxa::create([
            'px_ten' => 'Xã An Ngãi Trung',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Ngãi Tây',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thủy',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bảo Thạnh',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bảo Thuận',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Chánh',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Hòa',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Nhơn',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thạnh',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Lễ',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Ngãi',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Tuy',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hưng',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Mỹ',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thủy',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Xuân',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh An',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hòa',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Ba Tri',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Bình Tây',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Đức',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Hiệp',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Hòa Tây',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Phú Trung',
            'qh_ma'=> $huyenbatri->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Sơn Đông',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phú Khương',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phú Tân',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Phú',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thạnh An',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn Thạnh',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Hưng',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Nhuận',
            'qh_ma'=> $tpbentre->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $tpbentre->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Bình Đại',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vang Quới Tây',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Thới',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Châu Hưng',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đại Hòa Lộc',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Định Trung',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lộc Thuận',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Định',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Hòa',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Long',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Thuận',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Vang',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tam Hiệp',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Phước',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Trị',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới Lai',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới Thuận',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thừa Đức',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vang Quới Đông',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Thắng',
            'qh_ma'=> $huyenbinhdai->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Châu Thành',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tường Đa',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Hóa',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Khánh',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Phước',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Giao Hòa',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Giao Long',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hữu Định',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thành',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú An Hòa',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Đức',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Túc',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Thạnh',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Qưới Sơn',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Quới Thành',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Sơn Hòa',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tam Phước',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phú',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thạch',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thành Triệu',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tiên Long',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tiên Thủy',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Hiệp',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Chợ Lách',
            'qh_ma'=> $huyencholach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Nghĩa',
            'qh_ma'=> $huyencholach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Khánh Trung B',
            'qh_ma'=> $huyencholach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Thới',
            'qh_ma'=> $huyencholach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Phụng',
            'qh_ma'=> $huyencholach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Thành',
            'qh_ma'=> $huyencholach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Sơn Định',
            'qh_ma'=> $huyencholach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thiềng',
            'qh_ma'=> $huyencholach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Bình',
            'qh_ma'=> $huyencholach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hòa',
            'qh_ma'=> $huyencholach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Sơn',
            'qh_ma'=> $huyencholach->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Giồng Trôm',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thuận Điền',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Thành',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Châu Bình',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Châu Hòa',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Lễ',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Nhượng',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Phong',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Mỹ',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lương Hòa',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lương Phú',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lương Quới',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thạnh',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Mỹ',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Nẫm',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Long',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Sơn Phú',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hào',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lợi Thạnh',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thanh',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Phú Đông',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Hoà',
            'qh_ma'=> $huyengiongchom->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Lộc',
            'qh_ma'=> $huyenmocaybac->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Khánh Trung A',
            'qh_ma'=> $huyenmocaybac->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Thạnh Tân',
            'qh_ma'=> $huyenmocaybac->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhuận Phú Tân',
            'qh_ma'=> $huyenmocaybac->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Mỹ',
            'qh_ma'=> $huyenmocaybac->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Mỹ Trung',
            'qh_ma'=> $huyenmocaybac->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thanh Tân',
            'qh_ma'=> $huyenmocaybac->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phú Tây',
            'qh_ma'=> $huyenmocaybac->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thành Bình',
            'qh_ma'=> $huyenmocaybac->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thanh Tây',
            'qh_ma'=> $huyenmocaybac->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Ngãi',
            'qh_ma'=> $huyenmocaybac->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thành An',
            'qh_ma'=> $huyenmocaybac->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Bình',
            'qh_ma'=> $huyenmocaybac->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Mỏ Cày',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thành Thới B',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thạnh',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thới',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Khánh Đông',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Khánh Tây',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Cẩm Sơn',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đa Phước Hội',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Định Thủy',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hương Mỹ',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Minh Đức',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ngãi Đăng',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Hiệp',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hội',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Trung',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thành Thới A',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Định',
            'qh_ma'=> $huyenmocaynam->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Thạnh Phú',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới Thạnh',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Nhơn',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Quy',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thạnh',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thuận',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Thạnh',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đại Điền',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Giao Thạnh',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Lợi',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ An',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Hưng',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Khánh',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Quới Điền',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phong',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Hải',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Phong',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Điền',
            'qh_ma'=> $huyenthanhphu->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thành Thới',
            'qh_ma'=> $huyenmocay->qh_ma
        ]);
    }
}
