<?php

use Illuminate\Database\Seeder;
use App\quanhuyen;
use App\phuongxa;

class themphuongxaangiang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tpchaudoc = quanhuyen::where('qh_ma', '36')->first();
        $huyenchauthanh = quanhuyen::where('qh_ma', '37')->first();
        $huyenchomoi = quanhuyen::where('qh_ma', '38')->first();
        $huyentriton = quanhuyen::where('qh_ma', '39')->first();
        $huyentinhbien = quanhuyen::where('qh_ma', '40')->first();
        $huyenthoaison = quanhuyen::where('qh_ma', '41')->first();
        $huyenchauphu = quanhuyen::where('qh_ma', '42')->first();
        $huyenphutan = quanhuyen::where('qh_ma', '43')->first();
        $huyenanphu = quanhuyen::where('qh_ma', '44')->first();
        $thixatanchau = quanhuyen::where('qh_ma', '45')->first();
        $tplongxuyen = quanhuyen::where('qh_ma', '46')->first();
        $px = phuongxa::create([
            'px_ten' => 'Phường Châu Phú A',
            'qh_ma'=> $tpchaudoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Châu Phú B',
            'qh_ma'=> $tpchaudoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Núi Sam',
            'qh_ma'=> $tpchaudoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Tế',
            'qh_ma'=> $tpchaudoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Châu',
            'qh_ma'=> $tpchaudoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Ngươn',
            'qh_ma'=> $tpchaudoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Vĩnh Mỹ',
            'qh_ma'=> $tpchaudoc->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Thành',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Bình Thạnh',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh An',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn An Châu',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Bình',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Hòa',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Lợi',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Cần Đăng',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Thạnh',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Hòa',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phú',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Nhuận',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hanh',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Xã Tấn Mỹ',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thạnh Trung',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Phước Xuân',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa An',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Bình',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hội An',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Kiến An',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Kiến Thành',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Điền A',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Điền B',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Giang',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Kiến',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ An',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Hiệp',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Hội Đông',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn Mỹ',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Mỹ Luông',
            'qh_ma'=> $huyenchomoi->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Xã Châu Lăng',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Phước',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lê Trì',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lương An Trà',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lương Phi',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Núi Tô',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã ô Lâm',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tà Đảnh',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Tuyến',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Gia',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Ba Chúc',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Tri Tôn',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Tức',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lạc Quới',
            'qh_ma'=> $huyentriton->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Cô Tô',
            'qh_ma'=> $huyentriton->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Chi Lăng',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Tịnh Biên',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Cư',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Hảo',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Phú',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn Hưng',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Văn Giáo',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lợi',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Trung',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Nhà Bàng',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Nông',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Núi Voi',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới Sơn',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lập',
            'qh_ma'=> $huyentinhbien->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Núi Sập',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị Trấn Phú Hòa',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Bình',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Phú Đông',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Thuận',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Chánh',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Trạch',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vọng Đông',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vọng Thê',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Thành',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Định Mỹ',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Định Thành',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tây Phú',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thoại Giang',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Khánh',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Phú',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn óc Eo',
            'qh_ma'=> $huyenthoaison->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Cái Dầu',
            'qh_ma'=> $huyenchauphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Chánh',
            'qh_ma'=> $huyenchauphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Long',
            'qh_ma'=> $huyenchauphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Mỹ',
            'qh_ma'=> $huyenchauphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Phú',
            'qh_ma'=> $huyenchauphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Thủy',
            'qh_ma'=> $huyenchauphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Thạnh Trung',
            'qh_ma'=> $huyenchauphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Hòa',
            'qh_ma'=> $huyenchauphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Đức',
            'qh_ma'=> $huyenchauphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Phú',
            'qh_ma'=> $huyenchauphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã ô Long Vỹ',
            'qh_ma'=> $huyenchauphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Mỹ Tây',
            'qh_ma'=> $huyenchauphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đào Hữu Cảnh',
            'qh_ma'=> $huyenchauphu->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Thọ',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Sơn',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Hưng',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hòa',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Phú Mỹ',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Bình',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Xuân',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Thành',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Lạc',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Hòa',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hiệp Xương',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Thạnh',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Chợ Vàm',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Hiệp',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Lâm',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Long',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Thạnh Đông',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Trung',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú An',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Thị trấn An Phú',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Long Bình',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đa Phước',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh An',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Bình',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn Hội',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Lộc',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Hữu',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Hưng',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Quốc Thái',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Trường',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hậu',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hội Đông',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Hội',
            'qh_ma'=> $huyenanphu->qh_ma
        ]);


        $px = phuongxa::create([
            'px_ten' => 'Phường Long Sơn',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hòa',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Xương',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lê Chánh',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long An',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Phú',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Lộc',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Vĩnh',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân An',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thạnh',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Long Thạnh',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Long Hưng',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Long Châu',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Châu Phong',
            'qh_ma'=> $thixatanchau->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường Mỹ Bình',
            'qh_ma'=> $tplongxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Mỹ Hòa',
            'qh_ma'=> $tplongxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Mỹ Long',
            'qh_ma'=> $tplongxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Mỹ Phước',
            'qh_ma'=> $tplongxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Mỹ Quý',
            'qh_ma'=> $tplongxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Mỹ Thạnh',
            'qh_ma'=> $tplongxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Đông Xuyên',
            'qh_ma'=> $tplongxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Mỹ Xuyên',
            'qh_ma'=> $tplongxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Hoà Hưng',
            'qh_ma'=> $tplongxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Khánh',
            'qh_ma'=> $tplongxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Bình Đức',
            'qh_ma'=> $tplongxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Bình Khánh',
            'qh_ma'=> $tplongxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Mỹ Thới',
            'qh_ma'=> $tplongxuyen->qh_ma
        ]);

    }

}
