<?php

use Illuminate\Database\Seeder;
use App\quanhuyen;
use App\phuongxa;
class themphuongxalongan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $huyenbenluc = quanhuyen::where('qh_ma', '139')->first();
        $huyencanduoc = quanhuyen::where('qh_ma', '140')->first();
        $huyencangiuoc = quanhuyen::where('qh_ma', '141')->first();
        $huyenchauthanh = quanhuyen::where('qh_ma', '142')->first();
        $huyenduchoa = quanhuyen::where('qh_ma', '143')->first();
        $huyenduchue = quanhuyen::where('qh_ma', '144')->first();
        $huyenmochoa = quanhuyen::where('qh_ma', '145')->first();
        $tptanan = quanhuyen::where('qh_ma', '146')->first();
        $huyentanhung = quanhuyen::where('qh_ma', '147')->first();
        $huyentanthanh = quanhuyen::where('qh_ma', '148')->first();
        $huyentantru = quanhuyen::where('qh_ma', '149')->first();
        $huyenthanhhoa = quanhuyen::where('qh_ma', '150')->first();
        $huyenthuthua = quanhuyen::where('qh_ma', '151')->first();
        $huyenvinhhung = quanhuyen::where('qh_ma', '152')->first();
        $thixakientuong = quanhuyen::where('qh_ma', '153')->first();



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Bến Lức',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Hòa',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Đức',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Hiệp',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lương Bình',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lương Hòa',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Yên',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhựt Chánh',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Lợi',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Bửu',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hòa',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Đức',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Lợi',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thanh Phú',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thạnh',
            'qh_ma'=> $huyenbenluc->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Cần Đước',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lân',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Định',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Hòa',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Hựu Tây',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Khê',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Sơn',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Tuy',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Vân',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Ân',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Cơ',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Chánh',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Trạch',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Hựu Đông',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Trạch',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Lệ',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Đông',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Cang',
            'qh_ma'=> $huyencanduoc->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Cần Giuộc',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Kim',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long An',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Hậu',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Phụng',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Lâm',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Lý',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Tập',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thuận Thành',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trường Bình',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Thượng',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Lộc',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phứơc Hậu',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Lại',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Vĩnh Đông',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Vĩnh Tây',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Thạnh',
            'qh_ma'=> $huyencangiuoc->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã An Lục Long',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Dương Xuân Hội',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Trì',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thanh Vĩnh Đông',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Tầm Vu',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thanh Phú Long',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Quới',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thuận Mỹ',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hiệp Thạnh',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Công',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Ngãi Trị',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Phú',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Tân Hưng',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Đức Hòa',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Hạnh Bắc',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Hiệp Hòa',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Ninh Đông',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Ninh Tây',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đức Hòa Đông',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đức Hòa Hạ',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đức Hòa Thượng',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Hạnh Nam',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Mỹ',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phú',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đức Lập Hạ',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đức Lập Thượng',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hiệp Hòa',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Khánh Đông',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Khánh Nam',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Khánh Tây',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hựu Thạnh',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lộc Giang',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Hậu Nghĩa',
            'qh_ma'=> $huyenduchoa->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Đông Thành',
            'qh_ma'=> $huyenduchue->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Hòa Bắc',
            'qh_ma'=> $huyenduchue->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Hòa Hưng',
            'qh_ma'=> $huyenduchue->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Hòa Nam',
            'qh_ma'=> $huyenduchue->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Thành',
            'qh_ma'=> $huyenduchue->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thạnh Tây',
            'qh_ma'=> $huyenduchue->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Quý Đông',
            'qh_ma'=> $huyenduchue->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Quý Tây',
            'qh_ma'=> $huyenduchue->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thạnh Bắc',
            'qh_ma'=> $huyenduchue->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thạnh Đông',
            'qh_ma'=> $huyenduchue->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Bình',
            'qh_ma'=> $huyenduchue->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Mộc Hóa',
            'qh_ma'=> $huyenmochoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Hòa Đông',
            'qh_ma'=> $huyenmochoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Hòa Tây',
            'qh_ma'=> $huyenmochoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thành',
            'qh_ma'=> $huyenmochoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Phong Thạnh',
            'qh_ma'=> $huyenmochoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Thạnh',
            'qh_ma'=> $huyenmochoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lập',
            'qh_ma'=> $huyenmochoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Hòa Trung',
            'qh_ma'=> $huyenmochoa->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $tptanan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $tptanan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $tptanan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $tptanan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $tptanan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $tptanan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $tptanan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Khánh',
            'qh_ma'=> $tptanan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Vĩnh Ngãi',
            'qh_ma'=> $tptanan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Tâm',
            'qh_ma'=> $tptanan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hướng Thọ Phú',
            'qh_ma'=> $tptanan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lợi Bình Nhơn',
            'qh_ma'=> $tptanan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn Thạnh Trung',
            'qh_ma'=> $tptanan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Khánh Hậu',
            'qh_ma'=> $tptanan->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Tân Hưng',
            'qh_ma'=> $huyentanhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Điền',
            'qh_ma'=> $huyentanhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Điền B',
            'qh_ma'=> $huyentanhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Hà',
            'qh_ma'=> $huyentanhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Thạnh',
            'qh_ma'=> $huyentanhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Bửu',
            'qh_ma'=> $huyentanhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Châu A',
            'qh_ma'=> $huyentanhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Châu B',
            'qh_ma'=> $huyentanhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Đại',
            'qh_ma'=> $huyentanhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Lợi',
            'qh_ma'=> $huyentanhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Thạnh',
            'qh_ma'=> $huyentanhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Hưng',
            'qh_ma'=> $huyentanhung->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Tân Thạnh',
            'qh_ma'=> $huyentanthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bắc Hòa',
            'qh_ma'=> $huyentanthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hậu Thạnh Đông',
            'qh_ma'=> $huyentanthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hậu Thạnh Tây',
            'qh_ma'=> $huyentanthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn Hòa Lập',
            'qh_ma'=> $huyentanthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn Ninh',
            'qh_ma'=> $huyentanthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn Hoà',
            'qh_ma'=> $huyentanthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hòa',
            'qh_ma'=> $huyentanthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lập',
            'qh_ma'=> $huyentanthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Ninh',
            'qh_ma'=> $huyentanthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thành',
            'qh_ma'=> $huyentanthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Kiến Bình',
            'qh_ma'=> $huyentanthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Bình',
            'qh_ma'=> $huyentanthanh->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Nhựt Ninh',
            'qh_ma'=> $huyentantru->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đức Tân',
            'qh_ma'=> $huyentantru->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Lãng',
            'qh_ma'=> $huyentantru->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phước Tây',
            'qh_ma'=> $huyentantru->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Trinh Đông',
            'qh_ma'=> $huyentantru->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Tịnh',
            'qh_ma'=> $huyentantru->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Quê Mỹ Thạnh',
            'qh_ma'=> $huyentantru->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Nhựt Tân',
            'qh_ma'=> $huyentantru->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Bình',
            'qh_ma'=> $huyentantru->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Tân Trụ',
            'qh_ma'=> $huyentantru->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lạc Tấn',
            'qh_ma'=> $huyentantru->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Thạnh Hóa',
            'qh_ma'=> $huyenthanhhoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Đông',
            'qh_ma'=> $huyenthanhhoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hiệp',
            'qh_ma'=> $huyenthanhhoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Tây',
            'qh_ma'=> $huyenthanhhoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh An',
            'qh_ma'=> $huyenthanhhoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thủy Tây',
            'qh_ma'=> $huyenthanhhoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Phước',
            'qh_ma'=> $huyenthanhhoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thuận Bình',
            'qh_ma'=> $huyenthanhhoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thuận Nghĩa Hòa',
            'qh_ma'=> $huyenthanhhoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thủy Đông',
            'qh_ma'=> $huyenthanhhoa->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Phú',
            'qh_ma'=> $huyenthanhhoa->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Bình An',
            'qh_ma'=> $huyenthuthua->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Thạnh',
            'qh_ma'=> $huyenthuthua->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Thành',
            'qh_ma'=> $huyenthuthua->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Thạnh',
            'qh_ma'=> $huyenthuthua->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Thuận',
            'qh_ma'=> $huyenthuthua->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ An',
            'qh_ma'=> $huyenthuthua->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Phú',
            'qh_ma'=> $huyenthuthua->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thạnh',
            'qh_ma'=> $huyenthuthua->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhị Thành',
            'qh_ma'=> $huyenthuthua->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lập',
            'qh_ma'=> $huyenthuthua->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thành',
            'qh_ma'=> $huyenthuthua->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Thủ Thừa',
            'qh_ma'=> $huyenthuthua->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Lạc',
            'qh_ma'=> $huyenthuthua->qh_ma
        ]);
        



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Vĩnh Hưng',
            'qh_ma'=> $huyenvinhhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Hưng',
            'qh_ma'=> $huyenvinhhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thái Bình Trung',
            'qh_ma'=> $huyenvinhhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thái Trị',
            'qh_ma'=> $huyenvinhhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Bình',
            'qh_ma'=> $huyenvinhhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tuyên Bình Tây',
            'qh_ma'=> $huyenvinhhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Thuận',
            'qh_ma'=> $huyenvinhhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Trị',
            'qh_ma'=> $huyenvinhhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Điền A',
            'qh_ma'=> $huyenvinhhung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tuyên Bình',
            'qh_ma'=> $huyenvinhhung->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Hiệp',
            'qh_ma'=> $thixakientuong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Tân',
            'qh_ma'=> $thixakientuong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Hưng',
            'qh_ma'=> $thixakientuong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $thixakientuong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tuyên Thạnh',
            'qh_ma'=> $thixakientuong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $thixakientuong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $thixakientuong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Trị',
            'qh_ma'=> $thixakientuong->qh_ma
        ]);
        
    }
}
