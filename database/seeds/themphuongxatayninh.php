<?php

use Illuminate\Database\Seeder;
use App\quanhuyen;
use App\phuongxa;
class themphuongxatayninh extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $huyenbencau = quanhuyen::where('qh_ma', '130')->first();
        $huyenchauthanh = quanhuyen::where('qh_ma', '131')->first();
        $huyenhoathanh = quanhuyen::where('qh_ma', '132')->first();
        $huyenduogminhchau = quanhuyen::where('qh_ma', '133')->first();
        $huyengodau = quanhuyen::where('qh_ma', '134')->first();
        $huyentanbien = quanhuyen::where('qh_ma', '135')->first();
        $huyentanchau = quanhuyen::where('qh_ma', '136')->first();
        $tptayninh = quanhuyen::where('qh_ma', '137')->first();
        $huyentrangbang = quanhuyen::where('qh_ma', '138')->first();


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Bến Cầu',
            'qh_ma'=> $huyenbencau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thạnh',
            'qh_ma'=> $huyenbencau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lợi Thuận',
            'qh_ma'=> $huyenbencau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Chữ',
            'qh_ma'=> $huyenbencau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tiên Thuận',
            'qh_ma'=> $huyenbencau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Khánh',
            'qh_ma'=> $huyenbencau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Phước',
            'qh_ma'=> $huyenbencau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Thuận',
            'qh_ma'=> $huyenbencau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Giang',
            'qh_ma'=> $huyenbencau->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Long Vĩnh',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Hội',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thanh Điền',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trí Bình',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Châu Thành',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Thạnh',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thái Bình',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Biên Giới',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hảo Đước',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đồng Khởi',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Cơ',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Vinh',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ninh Điền',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thành Long',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Bình',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'TT. Dương Minh Châu',
            'qh_ma'=> $huyenduogminhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bàu Năng',
            'qh_ma'=> $huyenduogminhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bến Củi',
            'qh_ma'=> $huyenduogminhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Cầu Khởi',
            'qh_ma'=> $huyenduogminhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Chà Là',
            'qh_ma'=> $huyenduogminhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Truông Mít',
            'qh_ma'=> $huyenduogminhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phan',
            'qh_ma'=> $huyenduogminhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Minh',
            'qh_ma'=> $huyenduogminhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Ninh',
            'qh_ma'=> $huyenduogminhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Suối Đá',
            'qh_ma'=> $huyenduogminhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lộc Ninh',
            'qh_ma'=> $huyenduogminhchau->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Gò Dầu',
            'qh_ma'=> $huyengodau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bàu Đồn',
            'qh_ma'=> $huyengodau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Cẩm Giang',
            'qh_ma'=> $huyengodau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hiệp Thạnh',
            'qh_ma'=> $huyengodau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thanh Phước',
            'qh_ma'=> $huyengodau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Thạnh',
            'qh_ma'=> $huyengodau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Trạch',
            'qh_ma'=> $huyengodau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Đức',
            'qh_ma'=> $huyengodau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Đông',
            'qh_ma'=> $huyengodau->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Hòa Thành',
            'qh_ma'=> $huyenhoathanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hiệp Tân',
            'qh_ma'=> $huyenhoathanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Thành Bắc',
            'qh_ma'=> $huyenhoathanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trường Tây',
            'qh_ma'=> $huyenhoathanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Thành Trung',
            'qh_ma'=> $huyenhoathanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trường Đông',
            'qh_ma'=> $huyenhoathanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trường Hòa',
            'qh_ma'=> $huyenhoathanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Thành Nam',
            'qh_ma'=> $huyenhoathanh->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Tân Biên',
            'qh_ma'=> $huyentanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Hiệp',
            'qh_ma'=> $huyentanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỏ Công',
            'qh_ma'=> $huyentanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Bình',
            'qh_ma'=> $huyentanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trà Vong',
            'qh_ma'=> $huyentanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phong',
            'qh_ma'=> $huyentanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Bắc',
            'qh_ma'=> $huyentanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Bình',
            'qh_ma'=> $huyentanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Tây',
            'qh_ma'=> $huyentanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lập',
            'qh_ma'=> $huyentanbien->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Tân Châu',
            'qh_ma'=> $huyentanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Đông',
            'qh_ma'=> $huyentanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hoà',
            'qh_ma'=> $huyentanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hiệp',
            'qh_ma'=> $huyentanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Suối Ngô',
            'qh_ma'=> $huyentanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Suối Dây',
            'qh_ma'=> $huyentanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Đông',
            'qh_ma'=> $huyentanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hà',
            'qh_ma'=> $huyentanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hưng',
            'qh_ma'=> $huyentanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thành',
            'qh_ma'=> $huyentanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phú',
            'qh_ma'=> $huyentanchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hội',
            'qh_ma'=> $huyentanchau->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $tptayninh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $tptayninh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $tptayninh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $tptayninh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Tân',
            'qh_ma'=> $tptayninh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Minh',
            'qh_ma'=> $tptayninh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ninh Sơn',
            'qh_ma'=> $tptayninh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ninh Thạnh',
            'qh_ma'=> $tptayninh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Bình',
            'qh_ma'=> $tptayninh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Hiệp Ninh',
            'qh_ma'=> $tptayninh->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Trảng Bàng',
            'qh_ma'=> $huyentrangbang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Hòa',
            'qh_ma'=> $huyentrangbang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Tịnh',
            'qh_ma'=> $huyentrangbang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Thạnh',
            'qh_ma'=> $huyentrangbang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đôn Thuận',
            'qh_ma'=> $huyentrangbang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Lưu',
            'qh_ma'=> $huyentrangbang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Gia Lộc',
            'qh_ma'=> $huyentrangbang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Thuận',
            'qh_ma'=> $huyentrangbang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lộc Hưng',
            'qh_ma'=> $huyentrangbang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Chỉ',
            'qh_ma'=> $huyentrangbang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Gia Bình',
            'qh_ma'=> $huyentrangbang->qh_ma
        ]);
    }
}
