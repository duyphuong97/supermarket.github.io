<?php

use Illuminate\Database\Seeder;
use App\quanhuyen;
use App\phuongxa;
class themphuongxacamau extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $huyenngochien = quanhuyen::where('qh_ma', '66')->first();
        $huyennamcan = quanhuyen::where('qh_ma', '67')->first();
        $huyenuminh = quanhuyen::where('qh_ma', '68')->first();
        $huyencainuoc = quanhuyen::where('qh_ma', '69')->first();
        $huyendamdoi = quanhuyen::where('qh_ma', '70')->first();
        $huyenthoibinh = quanhuyen::where('qh_ma', '71')->first();
        $huyenphutan = quanhuyen::where('qh_ma', '72')->first();
        $huyentranvanthoi = quanhuyen::where('qh_ma', '73')->first();
        $tpcamau = quanhuyen::where('qh_ma', '74')->first();


        $px = phuongxa::create([
            'px_ten' => 'Xã Tam Giang Đông',
            'qh_ma'=> $huyenngochien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Rạch Gốc',
            'qh_ma'=> $huyenngochien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đất Mũi',
            'qh_ma'=> $huyenngochien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tam Giang Tây',
            'qh_ma'=> $huyenngochien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Hàng Vịnh',
            'qh_ma'=> $huyenngochien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân ân Tây',
            'qh_ma'=> $huyenngochien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Viên An',
            'qh_ma'=> $huyenngochien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Viên An Đông',
            'qh_ma'=> $huyenngochien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân ân',
            'qh_ma'=> $huyenngochien->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Lâm Hải',
            'qh_ma'=> $huyennamcan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tam Giang',
            'qh_ma'=> $huyennamcan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Năm Căn',
            'qh_ma'=> $huyennamcan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hiệp Tùng',
            'qh_ma'=> $huyennamcan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hàm Rồng',
            'qh_ma'=> $huyennamcan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hàng Vịnh',
            'qh_ma'=> $huyennamcan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đất Mới',
            'qh_ma'=> $huyennamcan->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Khánh Thuận',
            'qh_ma'=> $huyenuminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn U Minh',
            'qh_ma'=> $huyenuminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh An',
            'qh_ma'=> $huyenuminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nguyễn Phích',
            'qh_ma'=> $huyenuminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Hội',
            'qh_ma'=> $huyenuminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Lâm',
            'qh_ma'=> $huyenuminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Tiến',
            'qh_ma'=> $huyenuminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Hòa',
            'qh_ma'=> $huyenuminh->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Xã Việt Thắng',
            'qh_ma'=> $huyencainuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Cái Nước',
            'qh_ma'=> $huyencainuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Hưng',
            'qh_ma'=> $huyencainuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Thới',
            'qh_ma'=> $huyencainuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hoà Mỹ',
            'qh_ma'=> $huyencainuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trần Thới',
            'qh_ma'=> $huyencainuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lương Thế Trân',
            'qh_ma'=> $huyencainuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Hưng',
            'qh_ma'=> $huyencainuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hưng',
            'qh_ma'=> $huyencainuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hưng Đông',
            'qh_ma'=> $huyencainuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Phú',
            'qh_ma'=> $huyencainuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Mỹ',
            'qh_ma'=> $huyencainuoc->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Đầm Dơi',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trần Phán',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nguyễn Huân',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Quách Phẩm',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Quách Phẩm Bắc',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tạ An Khương',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tạ An Khương Đông',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tạ An Khương Nam',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Dân',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Đức',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Duyệt',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thuận',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Tiến',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Trung',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thanh Tùng',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ngọc Chánh',
            'qh_ma'=> $huyendamdoi->qh_ma
        ]);


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Thới Bình',
            'qh_ma'=> $huyenthoibinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Biển Bạch',
            'qh_ma'=> $huyenthoibinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Biển Bạch Đông',
            'qh_ma'=> $huyenthoibinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hồ Thị Kỷ',
            'qh_ma'=> $huyenthoibinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Bằng',
            'qh_ma'=> $huyenthoibinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trí Phải',
            'qh_ma'=> $huyenthoibinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lộc Bắc',
            'qh_ma'=> $huyenthoibinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lộc Đông',
            'qh_ma'=> $huyenthoibinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phú',
            'qh_ma'=> $huyenthoibinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới Bình',
            'qh_ma'=> $huyenthoibinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trí Lực',
            'qh_ma'=> $huyenthoibinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lộc',
            'qh_ma'=> $huyenthoibinh->qh_ma
        ]);


        $px = phuongxa::create([
            'px_ten' => 'Việt Khái',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Cái Đôi Vàm',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nguyễn Việt Khái',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Mỹ',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Việt Thắng',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Thuận',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Rạch Chèo',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hải',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hưng Tây',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Tân',
            'qh_ma'=> $huyenphutan->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Sông Đốc',
            'qh_ma'=> $huyentranvanthoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Trần Văn Thời',
            'qh_ma'=> $huyentranvanthoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Bình',
            'qh_ma'=> $huyentranvanthoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Bình Đông',
            'qh_ma'=> $huyentranvanthoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Bình Tây',
            'qh_ma'=> $huyentranvanthoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Bình Tây Bắc',
            'qh_ma'=> $huyentranvanthoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trần Hợi',
            'qh_ma'=> $huyentranvanthoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Hưng',
            'qh_ma'=> $huyentranvanthoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Lộc',
            'qh_ma'=> $huyentranvanthoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lợi An',
            'qh_ma'=> $huyentranvanthoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Điền',
            'qh_ma'=> $huyentranvanthoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Lạc',
            'qh_ma'=> $huyentranvanthoi->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Hải',
            'qh_ma'=> $huyentranvanthoi->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Tân Xuyên',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thành',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Trạch A',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Xuyên',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Định Bình',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Tân',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Thành',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lý Văn Lâm',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tắc Vân',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $tpcamau->qh_ma
        ]);
    }
}
