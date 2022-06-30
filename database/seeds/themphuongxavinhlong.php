<?php

use Illuminate\Database\Seeder;
use App\quanhuyen;
use App\phuongxa;
class themphuongxavinhlong extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thixabinhminh = quanhuyen::where('qh_ma', '85')->first();
        $huyenbinhtan = quanhuyen::where('qh_ma', '86')->first();
        $huyenlongho = quanhuyen::where('qh_ma', '87')->first();
        $huyenmangthit = quanhuyen::where('qh_ma', '88')->first();
        $huyentambinh = quanhuyen::where('qh_ma', '89')->first();
        $huyentraon = quanhuyen::where('qh_ma', '90')->first();
        $thanhphovinhlong = quanhuyen::where('qh_ma', '91')->first();
        $huyenvungliem = quanhuyen::where('qh_ma', '92')->first();


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Cái Vồn',
            'qh_ma'=> $thixabinhminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Bình',
            'qh_ma'=> $thixabinhminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Thành',
            'qh_ma'=> $thixabinhminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Đông Thuận',
            'qh_ma'=> $thixabinhminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Hòa',
            'qh_ma'=> $thixabinhminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thuận An',
            'qh_ma'=> $thixabinhminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thành Phước',
            'qh_ma'=> $thixabinhminh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đông Thạnh',
            'qh_ma'=> $thixabinhminh->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thuận',
            'qh_ma'=> $huyenbinhtan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nguyễn Văn Thảnh',
            'qh_ma'=> $huyenbinhtan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân An Thạnh',
            'qh_ma'=> $huyenbinhtan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Bình',
            'qh_ma'=> $huyenbinhtan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hưng',
            'qh_ma'=> $huyenbinhtan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thành Trung',
            'qh_ma'=> $huyenbinhtan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Quới',
            'qh_ma'=> $huyenbinhtan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thành',
            'qh_ma'=> $huyenbinhtan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thành Đông',
            'qh_ma'=> $huyenbinhtan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thành Lợi',
            'qh_ma'=> $huyenbinhtan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lược',
            'qh_ma'=> $huyenbinhtan->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Long Hồ',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh Quới',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Hòa Phước',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đồng Phú',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Ninh',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Phú',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lộc Hòa',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long An',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Phước',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Đức',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Quới',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phước Hậu',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hạnh',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thanh Đức',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Bình',
            'qh_ma'=> $huyenlongho->qh_ma
        ]);


        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Cái Nhum',
            'qh_ma'=> $huyenmangthit->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Phước',
            'qh_ma'=> $huyenmangthit->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Phước',
            'qh_ma'=> $huyenmangthit->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Chánh An',
            'qh_ma'=> $huyenmangthit->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Chánh Hội',
            'qh_ma'=> $huyenmangthit->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Tịnh',
            'qh_ma'=> $huyenmangthit->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Long Hội',
            'qh_ma'=> $huyenmangthit->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ An',
            'qh_ma'=> $huyenmangthit->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Phước',
            'qh_ma'=> $huyenmangthit->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn Phú',
            'qh_ma'=> $huyenmangthit->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân An Hội',
            'qh_ma'=> $huyenmangthit->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Long',
            'qh_ma'=> $huyenmangthit->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Mỹ',
            'qh_ma'=> $huyenmangthit->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Tam Bình',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tường Lộc',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hậu Lộc',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Hiệp',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hoà Lộc',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Thạnh',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Loan Mỹ',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Phú',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Lộc',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Mỹ Thạnh Trung',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Ngãi Tứ',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Lộc',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Thịnh',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Song Phú',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Lộc',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Phú',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Ninh',
            'qh_ma'=> $huyentambinh->qh_ma
        ]);
        


		$px = phuongxa::create([
            'px_ten' => 'Xã Lục Sỹ Thành',
            'qh_ma'=> $huyentraon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hòa Bình',
            'qh_ma'=> $huyentraon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hựu Thành',
            'qh_ma'=> $huyentraon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Trà ôn',
            'qh_ma'=> $huyentraon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn Bình',
            'qh_ma'=> $huyentraon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phú Thành',
            'qh_ma'=> $huyentraon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Xuân Hiệp',
            'qh_ma'=> $huyentraon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thiện Mỹ',
            'qh_ma'=> $huyentraon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thới Hòa',
            'qh_ma'=> $huyentraon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thuận Thới',
            'qh_ma'=> $huyentraon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tích Thiện',
            'qh_ma'=> $huyentraon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trà Côn',
            'qh_ma'=> $huyentraon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Xuân',
            'qh_ma'=> $huyentraon->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Mỹ',
            'qh_ma'=> $huyentraon->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $thanhphovinhlong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $thanhphovinhlong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $thanhphovinhlong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $thanhphovinhlong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $thanhphovinhlong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trường An',
            'qh_ma'=> $thanhphovinhlong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hòa',
            'qh_ma'=> $thanhphovinhlong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $thanhphovinhlong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $thanhphovinhlong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hội',
            'qh_ma'=> $thanhphovinhlong->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Ngãi',
            'qh_ma'=> $thanhphovinhlong->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Hiếu',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân An Luông',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Nghĩa',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Thành',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Thành Đông',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Thành Tây',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Thị trấn Vũng Liêm',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Quới Trung',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thanh Bình',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung An',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Chánh',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Hiệp',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hiếu Nghĩa',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hiếu Nhơn',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hiếu Phụng',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hiếu Thành',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Hiếu Thuận',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Quới An',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Quới Thiện',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Trung Ngãi',
            'qh_ma'=> $huyenvungliem->qh_ma
        ]);      
    }
}
