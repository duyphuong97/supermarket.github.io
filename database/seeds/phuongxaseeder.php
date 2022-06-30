<?php

use Illuminate\Database\Seeder;
use App\quanhuyen;
use App\phuongxa;

class phuongxaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quanthotnot = quanhuyen::where('qh_ma', '1')->first();
        $quanninhkieu = quanhuyen::where('qh_ma', '2')->first();
        $quanbinhthuy = quanhuyen::where('qh_ma', '3')->first();
        $quancairang = quanhuyen::where('qh_ma', '4')->first();
        $quanomon = quanhuyen::where('qh_ma', '5')->first();
        $huyenphongdien = quanhuyen::where('qh_ma', '6')->first();
        $huyencodo = quanhuyen::where('qh_ma', '7')->first();
        $huyenvinhthanh = quanhuyen::where('qh_ma', '8')->first();
        $huyenthoilai = quanhuyen::where('qh_ma', '9')->first();
        $vithuy = quanhuyen::where('qh_ma', '10')->first();
        $px = phuongxa::create([
            'px_ten' => 'Phường Thạnh Hòa',
            'qh_ma'=> $quanthotnot->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thuận Hưng',
            'qh_ma'=> $quanthotnot->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Trung Kiên',
            'qh_ma'=> $quanthotnot->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Trung Nhứt',
            'qh_ma'=> $quanthotnot->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thuận An',
            'qh_ma'=> $quanthotnot->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Hưng',
            'qh_ma'=> $quanthotnot->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Lộc',
            'qh_ma'=> $quanthotnot->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thới Thuận',
            'qh_ma'=> $quanthotnot->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thốt Nốt',
            'qh_ma'=> $quanthotnot->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường Cái Khế',
            'qh_ma'=> $quanninhkieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường An Hội',
            'qh_ma'=> $quanninhkieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường An Khánh',
            'qh_ma'=> $quanninhkieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường An Lạc',
            'qh_ma'=> $quanninhkieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường An Nghiệp',
            'qh_ma'=> $quanninhkieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường An Phú',
            'qh_ma'=> $quanninhkieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường An Hòa',
            'qh_ma'=> $quanninhkieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân An',
            'qh_ma'=> $quanninhkieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thới Bình',
            'qh_ma'=> $quanninhkieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Xuân Khánh',
            'qh_ma'=> $quanninhkieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Hưng Lợi',
            'qh_ma'=> $quanninhkieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường An Bình',
            'qh_ma'=> $quanninhkieu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường An Cư',
            'qh_ma'=> $quanninhkieu->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Phường An Thới',
            'qh_ma'=> $quanbinhthuy->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Bình Thủy',
            'qh_ma'=> $quanbinhthuy->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Bùi Hữu Nghĩa',
            'qh_ma'=> $quanbinhthuy->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Trà Nóc',
            'qh_ma'=> $quanbinhthuy->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Long Tuyền',
            'qh_ma'=> $quanbinhthuy->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thới An Đông',
            'qh_ma'=> $quanbinhthuy->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Trà An',
            'qh_ma'=> $quanbinhthuy->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Long Hòa',
            'qh_ma'=> $quanbinhthuy->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường Ba Láng',
            'qh_ma'=> $quancairang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Hưng Phú',
            'qh_ma'=> $quancairang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Hưng Thạnh',
            'qh_ma'=> $quancairang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thường Thạnh',
            'qh_ma'=> $quancairang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phú Thứ',
            'qh_ma'=> $quancairang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Phú',
            'qh_ma'=> $quancairang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Lê Bình',
            'qh_ma'=> $quancairang->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Phường Châu Văn Liêm',
            'qh_ma'=> $quanomon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Long Hưng',
            'qh_ma'=> $quanomon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phước Thới',
            'qh_ma'=> $quanomon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Trường Lạc',
            'qh_ma'=> $quanomon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thới An',
            'qh_ma'=> $quanomon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thới Long',
            'qh_ma'=> $quanomon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thới Hoà',
            'qh_ma'=> $quanomon->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị Trấn Phong Điền',
            'qh_ma'=> $huyenphongdien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Giai Xuân',
            'qh_ma'=> $huyenphongdien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Khánh',
            'qh_ma'=> $huyenphongdien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trường Long',
            'qh_ma'=> $huyenphongdien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn Nghĩa',
            'qh_ma'=> $huyenphongdien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thới',
            'qh_ma'=> $huyenphongdien->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn ái',
            'qh_ma'=> $huyenphongdien->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Cờ Đỏ',
            'qh_ma'=> $huyencodo->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Hiệp',
            'qh_ma'=> $huyencodo->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Thắng',
            'qh_ma'=> $huyencodo->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Phú',
            'qh_ma'=> $huyencodo->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới Đông',
            'qh_ma'=> $huyencodo->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Đông Thuận',
            'qh_ma'=> $huyencodo->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới Xuân',
            'qh_ma'=> $huyencodo->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung An',
            'qh_ma'=> $huyencodo->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Hưng',
            'qh_ma'=> $huyencodo->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Thạnh',
            'qh_ma'=> $huyencodo->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Trường Thành',
            'qh_ma'=> $huyencodo->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới Hưng',
            'qh_ma'=> $huyencodo->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Vĩnh Thạnh',
            'qh_ma'=> $huyenvinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Lợi',
            'qh_ma'=> $huyenvinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Tiến',
            'qh_ma'=> $huyenvinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Bình',
            'qh_ma'=> $huyenvinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Thạnh An',
            'qh_ma'=> $huyenvinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Trung Hưng',
            'qh_ma'=> $huyenvinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Thắng',
            'qh_ma'=> $huyenvinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Lộc',
            'qh_ma'=> $huyenvinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Qưới',
            'qh_ma'=> $huyenvinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Mỹ',
            'qh_ma'=> $huyenvinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Trinh',
            'qh_ma'=> $huyenvinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh An',
            'qh_ma'=> $huyenvinhthanh->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Thuận',
            'qh_ma'=> $huyenthoilai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thạnh',
            'qh_ma'=> $huyenthoilai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới Tân',
            'qh_ma'=> $huyenthoilai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới Thạnh',
            'qh_ma'=> $huyenthoilai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trường Thắng',
            'qh_ma'=> $huyenthoilai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trường Thành',
            'qh_ma'=> $huyenthoilai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Bình',
            'qh_ma'=> $huyenthoilai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trường Xuân A',
            'qh_ma'=> $huyenthoilai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trường Xuân B',
            'qh_ma'=> $huyenthoilai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Xuân Thắng',
            'qh_ma'=> $huyenthoilai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị Trấn Thới Lai',
            'qh_ma'=> $huyenthoilai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Định Môn',
            'qh_ma'=> $huyenthoilai->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trường Xuân',
            'qh_ma'=> $huyenthoilai->qh_ma
        ]);


        $px = phuongxa::create([
            'px_ten' => 'Vị Thắng',
            'qh_ma'=> $vithuy->qh_ma
        ]);

    }

}
