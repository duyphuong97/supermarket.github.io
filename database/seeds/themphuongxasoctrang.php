<?php

use Illuminate\Database\Seeder;
use App\quanhuyen;
use App\phuongxa;
class themphuongxasoctrang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $huyenchauthanh = quanhuyen::where('qh_ma', '93')->first();
        $huyenculaodung = quanhuyen::where('qh_ma', '94')->first();
        $huyenkesach = quanhuyen::where('qh_ma', '95')->first();
        $huyenlongphu = quanhuyen::where('qh_ma', '96')->first();
        $huyenmytu = quanhuyen::where('qh_ma', '97')->first();
        $huyenmyxuyen = quanhuyen::where('qh_ma', '98')->first();
        $thixanganam = quanhuyen::where('qh_ma', '99')->first();
        $tpsoctrang = quanhuyen::where('qh_ma', '100')->first();
        $huyenthanhtri = quanhuyen::where('qh_ma', '101')->first();
        $thixavinhchau = quanhuyen::where('qh_ma', '102')->first();
        $huyentrande = quanhuyen::where('qh_ma', '103')->first();


        $px = phuongxa::create([
            'px_ten' => 'Xã An Ninh',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Hiệp',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Tân',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Tâm',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thuận Hòa',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Châu Thành',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hồ Đắc Kiện',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thiện Mỹ',
            'qh_ma'=> $huyenchauthanh->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Cù Lao Dung',
            'qh_ma'=> $huyenculaodung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thạnh 1',
            'qh_ma'=> $huyenculaodung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thạnh 2',
            'qh_ma'=> $huyenculaodung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đại ân 1',
            'qh_ma'=> $huyenculaodung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thạnh Đông',
            'qh_ma'=> $huyenculaodung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thạnh Nam',
            'qh_ma'=> $huyenculaodung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thạnh Tây',
            'qh_ma'=> $huyenculaodung->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thạnh 3',
            'qh_ma'=> $huyenculaodung->qh_ma
        ]);
        



        $px = phuongxa::create([
            'px_ten' => 'Xã Xuân Hòa',
            'qh_ma'=> $huyenkesach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Kế Sách',
            'qh_ma'=> $huyenkesach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Lạc Tây',
            'qh_ma'=> $huyenkesach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Lạc Thôn',
            'qh_ma'=> $huyenkesach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Mỹ',
            'qh_ma'=> $huyenkesach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ba Trinh',
            'qh_ma'=> $huyenkesach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trinh Phú',
            'qh_ma'=> $huyenkesach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Kế An',
            'qh_ma'=> $huyenkesach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Kế Thành',
            'qh_ma'=> $huyenkesach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn Mỹ',
            'qh_ma'=> $huyenkesach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Nẫm',
            'qh_ma'=> $huyenkesach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới An Hội',
            'qh_ma'=> $huyenkesach->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đại Hải',
            'qh_ma'=> $huyenkesach->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Đại ân 2',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trường Khánh',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Long Phú',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Châu Khánh',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hậu Thạnh',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lịch Hội Thượng',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Liêu Tú',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Đức',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Phú',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Hữu',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Song Phụng',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hưng',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thạnh',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Bình',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Bình',
            'qh_ma'=> $huyenlongphu->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị Trấn Huỳnh Hữu Nghĩa',
            'qh_ma'=> $huyenmytu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hưng Phú',
            'qh_ma'=> $huyenmytu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Hưng',
            'qh_ma'=> $huyenmytu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Phước',
            'qh_ma'=> $huyenmytu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thuận Hoà',
            'qh_ma'=> $huyenmytu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Hương',
            'qh_ma'=> $huyenmytu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Tú',
            'qh_ma'=> $huyenmytu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Mỹ',
            'qh_ma'=> $huyenmytu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thuận Hưng',
            'qh_ma'=> $huyenmytu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thuận',
            'qh_ma'=> $huyenmytu->qh_ma
        ]);
        


        $px = phuongxa::create([
            'px_ten' => 'Xã Tài Văn',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Viên Bình',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Mỹ Xuyên',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đại Tâm',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Gia Hòa 1',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Gia Hòa 2',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Tú 1',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Tú II',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ngọc Đông',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ngọc Tố',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tham Đôn',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Phú',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Quới',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Thới An',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Viên An',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Thới Thuận',
            'qh_ma'=> $huyenmyxuyen->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Ngã Năm',
            'qh_ma'=> $thixanganam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Quới',
            'qh_ma'=> $thixanganam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Long',
            'qh_ma'=> $thixanganam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Biên',
            'qh_ma'=> $thixanganam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Bình',
            'qh_ma'=> $thixanganam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $thixanganam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Bình',
            'qh_ma'=> $thixanganam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Quới',
            'qh_ma'=> $thixanganam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $thixanganam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $thixanganam->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Tân',
            'qh_ma'=> $thixanganam->qh_ma
        ]);
        


       $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $tpsoctrang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $tpsoctrang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $tpsoctrang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $tpsoctrang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $tpsoctrang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $tpsoctrang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $tpsoctrang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $tpsoctrang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $tpsoctrang->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 10',
            'qh_ma'=> $tpsoctrang->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Châu Hưng',
            'qh_ma'=> $huyenthanhtri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lâm Kiết',
            'qh_ma'=> $huyenthanhtri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lâm Tân',
            'qh_ma'=> $huyenthanhtri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Tân',
            'qh_ma'=> $huyenthanhtri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Hưng Lợi',
            'qh_ma'=> $huyenthanhtri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tuân Tức',
            'qh_ma'=> $huyenthanhtri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Lợi',
            'qh_ma'=> $huyenthanhtri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Thành',
            'qh_ma'=> $huyenthanhtri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Phú Lộc',
            'qh_ma'=> $huyenthanhtri->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Trị',
            'qh_ma'=> $huyenthanhtri->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Vĩnh Châu',
            'qh_ma'=> $thixavinhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Đông',
            'qh_ma'=> $thixavinhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Khánh Hòa',
            'qh_ma'=> $thixavinhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Phước',
            'qh_ma'=> $thixavinhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Tân',
            'qh_ma'=> $thixavinhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 02',
            'qh_ma'=> $thixavinhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lai Hòa',
            'qh_ma'=> $thixavinhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Châu',
            'qh_ma'=> $thixavinhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hải',
            'qh_ma'=> $thixavinhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Hiệp',
            'qh_ma'=> $thixavinhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 01',
            'qh_ma'=> $thixavinhchau->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lạc Hòa',
            'qh_ma'=> $thixavinhchau->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Trần Đề',
            'qh_ma'=> $huyentrande->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tài Văn',
            'qh_ma'=> $huyentrande->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Lịch Hội Thượng',
            'qh_ma'=> $huyentrande->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lịch Hội Thượng',
            'qh_ma'=> $huyentrande->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Bình',
            'qh_ma'=> $huyentrande->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đại Ân 2',
            'qh_ma'=> $huyentrande->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Liêu Tú',
            'qh_ma'=> $huyentrande->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Viên Bình',
            'qh_ma'=> $huyentrande->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Thới An',
            'qh_ma'=> $huyentrande->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Viên An',
            'qh_ma'=> $huyentrande->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Thới Thuận',
            'qh_ma'=> $huyentrande->qh_ma
        ]);
    }
}
