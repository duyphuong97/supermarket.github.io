<?php

use Illuminate\Database\Seeder;
use App\quanhuyen;
use App\phuongxa;
class themphuongxakiengiang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $huyenkienluong = quanhuyen::where('qh_ma', '115')->first();
        $thixahatien = quanhuyen::where('qh_ma', '116')->first();
        $huyenhondat = quanhuyen::where('qh_ma', '117')->first();
        $huyengiongrieng = quanhuyen::where('qh_ma', '118')->first();
        $huyenanbien = quanhuyen::where('qh_ma', '119')->first();
        $huyengoquao = quanhuyen::where('qh_ma', '120')->first();
        $huyentanhiep = quanhuyen::where('qh_ma', '121')->first();
        $huyenvinhthuan = quanhuyen::where('qh_ma', '122')->first();
        $huyenanminh = quanhuyen::where('qh_ma', '123')->first();
        $huyenchauthanh = quanhuyen::where('qh_ma', '124')->first();
        $huyenkienhai = quanhuyen::where('qh_ma', '125')->first(); 
        $huyenphuquoc = quanhuyen::where('qh_ma', '126')->first();
        $tprachgia = quanhuyen::where('qh_ma', '127')->first();
        $huyenuminhthuong = quanhuyen::where('qh_ma', '128')->first();
        $huyengiangthanh = quanhuyen::where('qh_ma', '129')->first();



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Kiên Lương',
            'qh_ma'=> $huyenkienluong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình An',
            'qh_ma'=> $huyenkienluong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Trị',
            'qh_ma'=> $huyenkienluong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Sơn Hải',
            'qh_ma'=> $huyenkienluong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hoà Điền',
            'qh_ma'=> $huyenkienluong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòn Nghệ',
            'qh_ma'=> $huyenkienluong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Kiên Bình',
            'qh_ma'=> $huyenkienluong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Dương Hòa',
            'qh_ma'=> $huyenkienluong->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Kiên Lương',
            'qh_ma'=> $thixahatien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình An',
            'qh_ma'=> $thixahatien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Trị',
            'qh_ma'=> $thixahatien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Sơn Hải',
            'qh_ma'=> $thixahatien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hoà Điền',
            'qh_ma'=> $thixahatien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòn Nghệ',
            'qh_ma'=> $thixahatien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Kiên Bình',
            'qh_ma'=> $thixahatien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Dương Hòa',
            'qh_ma'=> $thixahatien->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Hòn Đất',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Sóc Sơn',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Giang',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Sơn',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lình Huỳnh',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Hiệp Sơn',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thổ Sơn',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Phước',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thái',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thuận',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nam Thái Sơn',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Sơn Bình',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Sơn Kiên',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Lâm',
            'qh_ma'=> $huyenhondat->qh_ma
        ]);
        



        $px = phuongxa::create([
            'px_ten' => 'Thạnh Bình',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Thạnh',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bàn Tân Định',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bàn Thạch',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hoà An',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Hưng',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hoà Lợi',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Thuận',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Thạnh',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ngọc Chúc',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ngọc Hòa',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ngọc Thành',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ngọc Thuận',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Hòa',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Hưng',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Lộc',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Phước',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Phú',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Giồng Riềng',
            'qh_ma'=> $huyengiongrieng->qh_ma
        ]);
        



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Thứ Ba',
            'qh_ma'=> $huyenanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Thái',
            'qh_ma'=> $huyenanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Yên',
            'qh_ma'=> $huyenanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Yên',
            'qh_ma'=> $huyenanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tây Yên A',
            'qh_ma'=> $huyenanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nam Thái A',
            'qh_ma'=> $huyenanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nam Yên',
            'qh_ma'=> $huyenanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tây Yên',
            'qh_ma'=> $huyenanbien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nam Thái',
            'qh_ma'=> $huyenanbien->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Xã Định An',
            'qh_ma'=> $huyengoquao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Định Hòa',
            'qh_ma'=> $huyengoquao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới Quản',
            'qh_ma'=> $huyengoquao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thủy Liễu',
            'qh_ma'=> $huyengoquao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hòa Hưng Bắc',
            'qh_ma'=> $huyengoquao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Tuy',
            'qh_ma'=> $huyengoquao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Gò Quao',
            'qh_ma'=> $huyengoquao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Phước A',
            'qh_ma'=> $huyengoquao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Phước B',
            'qh_ma'=> $huyengoquao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Thắng',
            'qh_ma'=> $huyengoquao->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hòa Hưng Nam',
            'qh_ma'=> $huyengoquao->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hội',
            'qh_ma'=> $huyentanhiep->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thành',
            'qh_ma'=> $huyentanhiep->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Đông B',
            'qh_ma'=> $huyentanhiep->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Trị',
            'qh_ma'=> $huyentanhiep->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Tân Hiệp',
            'qh_ma'=> $huyentanhiep->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Tân Hòa',
            'qh_ma'=> $huyentanhiep->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hiệp A',
            'qh_ma'=> $huyentanhiep->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hiệp B',
            'qh_ma'=> $huyentanhiep->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Đông',
            'qh_ma'=> $huyentanhiep->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Đông A',
            'qh_ma'=> $huyentanhiep->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân An',
            'qh_ma'=> $huyentanhiep->qh_ma
        ]);
        



        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thuận',
            'qh_ma'=> $huyenvinhthuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Bình Bắc',
            'qh_ma'=> $huyenvinhthuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Bình Nam',
            'qh_ma'=> $huyenvinhthuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Phong',
            'qh_ma'=> $huyenvinhthuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Thuận',
            'qh_ma'=> $huyenvinhthuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Vĩnh Thuận',
            'qh_ma'=> $huyenvinhthuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Bình Minh',
            'qh_ma'=> $huyenvinhthuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phong Đông',
            'qh_ma'=> $huyenvinhthuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Vĩnh Hòa',
            'qh_ma'=> $huyenvinhthuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Minh Thuận',
            'qh_ma'=> $huyenvinhthuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Hòa Chánh',
            'qh_ma'=> $huyenvinhthuan->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Thứ Mười Một',
            'qh_ma'=> $huyenanminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Hòa',
            'qh_ma'=> $huyenanminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Hưng',
            'qh_ma'=> $huyenanminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Hưng A',
            'qh_ma'=> $huyenanminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Thạnh',
            'qh_ma'=> $huyenanminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vân Khánh Tây',
            'qh_ma'=> $huyenanminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Minh Bắc',
            'qh_ma'=> $huyenanminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Hưng B',
            'qh_ma'=> $huyenanminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thạnh',
            'qh_ma'=> $huyenanminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thuận Hoà',
            'qh_ma'=> $huyenanminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vân Khánh Đông',
            'qh_ma'=> $huyenanminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vân Khánh',
            'qh_ma'=> $huyenanminh->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Xã Mong Thọ',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hòa Hiệp',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Minh Hòa',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình An',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mong Thọ A',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Minh Lương',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Giục Tượng',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mong Thọ B',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Lộc',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hoà Phú',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Xã An Sơn',
            'qh_ma'=> $huyenkienhai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lại Sơn',
            'qh_ma'=> $huyenkienhai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nam Du',
            'qh_ma'=> $huyenkienhai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòn Tre',
            'qh_ma'=> $huyenkienhai->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn An Thới',
            'qh_ma'=> $huyenphuquoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Cửa Cạn',
            'qh_ma'=> $huyenphuquoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Cửa Dương',
            'qh_ma'=> $huyenphuquoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Dương Tơ',
            'qh_ma'=> $huyenphuquoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bãi Thơm',
            'qh_ma'=> $huyenphuquoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hàm Ninh',
            'qh_ma'=> $huyenphuquoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòn Thơm',
            'qh_ma'=> $huyenphuquoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thổ Châu',
            'qh_ma'=> $huyenphuquoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Dương Đông',
            'qh_ma'=> $huyenphuquoc->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Gành Dầu',
            'qh_ma'=> $huyenphuquoc->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường An Hòa',
            'qh_ma'=> $tprachgia->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Vĩnh Quang',
            'qh_ma'=> $tprachgia->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Vĩnh Thanh Vân',
            'qh_ma'=> $tprachgia->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Vĩnh Thông',
            'qh_ma'=> $tprachgia->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường An Bình',
            'qh_ma'=> $tprachgia->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Vĩnh Bảo',
            'qh_ma'=> $tprachgia->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Vĩnh Hiệp',
            'qh_ma'=> $tprachgia->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Vĩnh Lạc',
            'qh_ma'=> $tprachgia->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Vĩnh Lợi',
            'qh_ma'=> $tprachgia->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Vĩnh Thanh',
            'qh_ma'=> $tprachgia->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phi Thông',
            'qh_ma'=> $tprachgia->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Rạch Sỏi',
            'qh_ma'=> $tprachgia->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Xã Hoà Chánh',
            'qh_ma'=> $huyenuminhthuong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Minh Thuận',
            'qh_ma'=> $huyenuminhthuong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hòa',
            'qh_ma'=> $huyenuminhthuong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Yên',
            'qh_ma'=> $huyenuminhthuong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Yên A',
            'qh_ma'=> $huyenuminhthuong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'An Minh Bắc',
            'qh_ma'=> $huyenuminhthuong->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Lợi',
            'qh_ma'=> $huyengiangthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Mỹ',
            'qh_ma'=> $huyengiangthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Phú',
            'qh_ma'=> $huyengiangthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Điều',
            'qh_ma'=> $huyengiangthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Khánh Hòa',
            'qh_ma'=> $huyengiangthanh->qh_ma
        ]);
    }
}
