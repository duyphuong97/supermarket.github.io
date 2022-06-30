<?php

use Illuminate\Database\Seeder;
use App\quanhuyen;
use App\phuongxa;
class themphuongxatphcm extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quan1 = quanhuyen::where('qh_ma', '12')->first();
        $quan2 = quanhuyen::where('qh_ma', '13')->first();
        $quan3 = quanhuyen::where('qh_ma', '14')->first();
        $quan4 = quanhuyen::where('qh_ma', '15')->first();
        $quan5 = quanhuyen::where('qh_ma', '16')->first();
        $quan6 = quanhuyen::where('qh_ma', '17')->first();
        $quan7 = quanhuyen::where('qh_ma', '18')->first();
        $quan8 = quanhuyen::where('qh_ma', '19')->first();
        $quan9 = quanhuyen::where('qh_ma', '20')->first();
        $quan10 = quanhuyen::where('qh_ma', '21')->first();
        $quan11 = quanhuyen::where('qh_ma', '22')->first();
        $quan12 = quanhuyen::where('qh_ma', '23')->first();
        $quantanbinh = quanhuyen::where('qh_ma', '24')->first();
        $quantanphu = quanhuyen::where('qh_ma', '25')->first();
        $quanphunhuan = quanhuyen::where('qh_ma', '26')->first();
        $quangovap = quanhuyen::where('qh_ma', '27')->first();
        $quanbinhthanh = quanhuyen::where('qh_ma', '28')->first();
        $quanthuduc = quanhuyen::where('qh_ma', '29')->first();
        $quanbinhtan = quanhuyen::where('qh_ma', '30')->first();
        $huyenhocmon = quanhuyen::where('qh_ma', '31')->first();
        $huyencuchi = quanhuyen::where('qh_ma', '32')->first();
        $huyennhabe = quanhuyen::where('qh_ma', '33')->first();
        $huyenbinhchanh = quanhuyen::where('qh_ma', '34')->first();
        $huyencangio = quanhuyen::where('qh_ma', '35')->first();
       


        $px = phuongxa::create([
            'px_ten' => 'Phường Bến Nghé',
            'qh_ma'=> $quan1->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Bến Thành',
            'qh_ma'=> $quan1->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Cầu Kho',
            'qh_ma'=> $quan1->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Cầu Ông Lãnh',
            'qh_ma'=> $quan1->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Định',
            'qh_ma'=> $quan1->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Đa Kao',
            'qh_ma'=> $quan1->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Nguyễn Cư Trinh',
            'qh_ma'=> $quan1->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Nguyễn Thái Bình',
            'qh_ma'=> $quan1->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phạm Ngũ Lão',
            'qh_ma'=> $quan1->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Cô Giang',
            'qh_ma'=> $quan1->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường An Khánh',
            'qh_ma'=> $quan2->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường An Lợi Đông',
            'qh_ma'=> $quan2->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường An Phú',
            'qh_ma'=> $quan2->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Bình An',
            'qh_ma'=> $quan2->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Bình Khánh',
            'qh_ma'=> $quan2->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thủ Thiêm',
            'qh_ma'=> $quan2->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Bình Trưng Tây',
            'qh_ma'=> $quan2->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Cát Lái',
            'qh_ma'=> $quan2->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thạnh Mỹ Lợi',
            'qh_ma'=> $quan2->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thảo Điền',
            'qh_ma'=> $quan2->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Bình Trưng Đông',
            'qh_ma'=> $quan2->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường An Bình',
            'qh_ma'=> $quan2->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $quan3->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $quan3->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $quan3->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $quan3->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $quan3->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $quan3->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $quan3->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $quan3->qh_ma
        ]);
         $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $quan3->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 10',
            'qh_ma'=> $quan3->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 11',
            'qh_ma'=> $quan3->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 12',
            'qh_ma'=> $quan3->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 13',
            'qh_ma'=> $quan3->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 14',
            'qh_ma'=> $quan3->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 10',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 12',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 13',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 14',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 15',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 16',
            'qh_ma'=> $quan4->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 18',
            'qh_ma'=> $quan4->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $quan5->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $quan5->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $quan5->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $quan5->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $quan5->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $quan5->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $quan5->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $quan5->qh_ma
        ]);
         $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $quan5->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 10',
            'qh_ma'=> $quan5->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 11',
            'qh_ma'=> $quan5->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 12',
            'qh_ma'=> $quan5->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 13',
            'qh_ma'=> $quan5->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 14',
            'qh_ma'=> $quan5->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $quan6->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $quan6->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $quan6->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $quan6->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $quan6->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $quan6->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $quan6->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $quan6->qh_ma
        ]);
         $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $quan6->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 10',
            'qh_ma'=> $quan6->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 11',
            'qh_ma'=> $quan6->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 12',
            'qh_ma'=> $quan6->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 13',
            'qh_ma'=> $quan6->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 14',
            'qh_ma'=> $quan6->qh_ma
        ]);


        $px = phuongxa::create([
            'px_ten' => 'Phường Bình Thuận',
            'qh_ma'=> $quan7->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phú Mỹ',
            'qh_ma'=> $quan7->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phú Thuận',
            'qh_ma'=> $quan7->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Hưng',
            'qh_ma'=> $quan7->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Thuận Tây',
            'qh_ma'=> $quan7->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'XPhường Tân Phong',
            'qh_ma'=> $quan7->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Phú',
            'qh_ma'=> $quan7->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Quy',
            'qh_ma'=> $quan7->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Thuận Đông',
            'qh_ma'=> $quan7->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Kiểng',
            'qh_ma'=> $quan7->qh_ma
        ]);




       $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $quan8->qh_ma
        ]);
         $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 10',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 11',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 12',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 13',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 14',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 15',
            'qh_ma'=> $quan8->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 16',
            'qh_ma'=> $quan8->qh_ma
        ]);




        $px = phuongxa::create([
            'px_ten' => 'Cát Lái',
            'qh_ma'=> $quan9->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Hiệp Phú',
            'qh_ma'=> $quan9->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Long Bình',
            'qh_ma'=> $quan9->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Long Phước',
            'qh_ma'=> $quan9->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Long Thạnh Mỹ',
            'qh_ma'=> $quan9->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Long Trường',
            'qh_ma'=> $quan9->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Trường Thạnh',
            'qh_ma'=> $quan9->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phước Bình',
            'qh_ma'=> $quan9->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phước Long A',
            'qh_ma'=> $quan9->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phước Long B',
            'qh_ma'=> $quan9->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Phú',
            'qh_ma'=> $quan9->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tăng Nhơn Phú A',
            'qh_ma'=> $quan9->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phú Hữu',
            'qh_ma'=> $quan9->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tăng Nhơn Phú B',
            'qh_ma'=> $quan9->qh_ma
        ]);



         $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $quan10->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $quan10->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $quan10->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $quan10->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $quan10->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $quan10->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $quan10->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $quan10->qh_ma
        ]);
         $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $quan10->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 10',
            'qh_ma'=> $quan10->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 11',
            'qh_ma'=> $quan10->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 12',
            'qh_ma'=> $quan10->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 13',
            'qh_ma'=> $quan10->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 14',
            'qh_ma'=> $quan10->qh_ma
        ]);



         $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $quan11->qh_ma
        ]);
         $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 10',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 11',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 12',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 13',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 14',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 15',
            'qh_ma'=> $quan11->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 16',
            'qh_ma'=> $quan11->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường An Phú Đông',
            'qh_ma'=> $quan12->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Đông Hưng Thuận',
            'qh_ma'=> $quan12->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Hiệp Thành',
            'qh_ma'=> $quan12->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Chánh Hiệp',
            'qh_ma'=> $quan12->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Hưng Thuận',
            'qh_ma'=> $quan12->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Trung Mỹ Tây',
            'qh_ma'=> $quan12->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Thới Nhất',
            'qh_ma'=> $quan12->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thạnh Lộc',
            'qh_ma'=> $quan12->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thạnh Xuân',
            'qh_ma'=> $quan12->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Thới An',
            'qh_ma'=> $quan12->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Thới Hiệp',
            'qh_ma'=> $quan12->qh_ma
        ]);


        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 10',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 11',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 12',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 13',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 14',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 15',
            'qh_ma'=> $quantanbinh->qh_ma
        ]);


        $px = phuongxa::create([
            'px_ten' => 'Phường Hiệp Tân',
            'qh_ma'=> $quantanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Hoà Thạnh',
            'qh_ma'=> $quantanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phú Thạnh',
            'qh_ma'=> $quantanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phú Thọ Hoà',
            'qh_ma'=> $quantanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Phú Trung',
            'qh_ma'=> $quantanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tây Thạnh',
            'qh_ma'=> $quantanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Quý',
            'qh_ma'=> $quantanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Sơn Nhì',
            'qh_ma'=> $quantanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Thành',
            'qh_ma'=> $quantanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Tân Thới Hoà',
            'qh_ma'=> $quantanphu->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường Sơn Kỳ',
            'qh_ma'=> $quantanphu->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 10',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 11',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 12',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 13',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 14',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 15',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 17',
            'qh_ma'=> $quanphunhuan->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 4',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 8',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 9',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 10',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 11',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 12',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 13',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 14',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 15',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 16',
            'qh_ma'=> $quangovap->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 17',
            'qh_ma'=> $quangovap->qh_ma
        ]);



        $px = phuongxa::create([
            'px_ten' => 'Phường 1',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 2',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 3',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 5',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 6',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 7',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 11',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 12',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 13',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 14',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 15',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 17',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 19',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 21',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 22',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 24',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 25',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 26',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 27',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Phường 28',
            'qh_ma'=> $quanbinhthanh->qh_ma
        ]);
       


       $px = phuongxa::create([
            'px_ten' => 'Phường Bình Chiểu',
            'qh_ma'=> $quanthuduc->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Bình Thọ',
            'qh_ma'=> $quanthuduc->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Hiệp Bình Chánh',
            'qh_ma'=> $quanthuduc->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Hiệp Bình Phước',
            'qh_ma'=> $quanthuduc->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Linh Chiểu',
            'qh_ma'=> $quanthuduc->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Trường Thọ',
            'qh_ma'=> $quanthuduc->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Linh Tây',
            'qh_ma'=> $quanthuduc->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Linh Trung',
            'qh_ma'=> $quanthuduc->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Linh Xuân',
            'qh_ma'=> $quanthuduc->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Tam Bình',
            'qh_ma'=> $quanthuduc->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Tam Phú',
            'qh_ma'=> $quanthuduc->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Linh Đông',
            'qh_ma'=> $quanthuduc->qh_ma
        ]);


       $px = phuongxa::create([
            'px_ten' => 'Phường Bình Hưng Hòa B',
            'qh_ma'=> $quanbinhtan->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Bình Trị Đông',
            'qh_ma'=> $quanbinhtan->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Bình Trị Đông A',
            'qh_ma'=> $quanbinhtan->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Bình Trị Đông B',
            'qh_ma'=> $quanbinhtan->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Bình Hưng Hòa A',
            'qh_ma'=> $quanbinhtan->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Tân Tạo A',
            'qh_ma'=> $quanbinhtan->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường An Lạc',
            'qh_ma'=> $quanbinhtan->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường An Lạc A',
            'qh_ma'=> $quanbinhtan->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Bình Hưng Hòa',
            'qh_ma'=> $quanbinhtan->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phường Tân Tạo',
            'qh_ma'=> $quanbinhtan->qh_ma
        ]);



       $px = phuongxa::create([
            'px_ten' => 'Thị Trấn Hóc Môn',
            'qh_ma'=> $huyenhocmon->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Bà Điểm',
            'qh_ma'=> $huyenhocmon->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Đông Thạnh',
            'qh_ma'=> $huyenhocmon->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Nhị Bình',
            'qh_ma'=> $huyenhocmon->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Tân Hiệp',
            'qh_ma'=> $huyenhocmon->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Xuân Thới Thượng',
            'qh_ma'=> $huyenhocmon->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Tân Xuân',
            'qh_ma'=> $huyenhocmon->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Thới Tam Thôn',
            'qh_ma'=> $huyenhocmon->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Trung Chánh',
            'qh_ma'=> $huyenhocmon->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Xuân Thới Đông',
            'qh_ma'=> $huyenhocmon->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Xuân Thới Sơn',
            'qh_ma'=> $huyenhocmon->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Tân Thới Nhì',
            'qh_ma'=> $huyenhocmon->qh_ma
        ]);



       $px = phuongxa::create([
            'px_ten' => 'An Nhơn Tây',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Phước Hiệp',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Hoà Phú',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Nhuận Đức',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phú Hòa Đông',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phú Mỹ Hưng',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phước Thạnh',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Phước Vĩnh An',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Tân An Hội',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Tân Phú Trung',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Tân Thạnh Tây',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Tân Thông Hội',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Trung Lập Thượng',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Trung Lập Hạ',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Tân Thạnh Đông',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Thái Mỹ',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Thị Trấn Củ Chi',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Trung An',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Bình Mỹ',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Phạm Văn Cội',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'An Phú',
            'qh_ma'=> $huyencuchi->qh_ma
        ]);



       $px = phuongxa::create([
            'px_ten' => 'Thị Trấn Nhà Bè',
            'qh_ma'=> $huyennhabe->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Hiệp Phước',
            'qh_ma'=> $huyennhabe->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Phước Lộc',
            'qh_ma'=> $huyennhabe->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Phước Kiển',
            'qh_ma'=> $huyennhabe->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Nhơn Đức',
            'qh_ma'=> $huyennhabe->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Phú Xuân',
            'qh_ma'=> $huyennhabe->qh_ma
        ]);
       $px = phuongxa::create([
            'px_ten' => 'Xã Long Thới',
            'qh_ma'=> $huyennhabe->qh_ma
        ]);



       $px = phuongxa::create([
            'px_ten' => 'Thị Trấn Tân Túc',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Lộc B',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Chánh',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Lợi',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Đa Phước',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'TXã Hưng Long',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lê Minh Xuân',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phạm Văn Hai',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Phong Phú',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Nhựt',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Hưng',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Qui Đức',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Kiên',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tân Quý Tây',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Vĩnh Lộc A',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Phú Tây',
            'qh_ma'=> $huyenbinhchanh->qh_ma
        ]);


        $px = phuongxa::create([
            'px_ten' => 'Thị Trấn Cần Thạnh',
            'qh_ma'=> $huyencangio->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã An Thới Đông',
            'qh_ma'=> $huyencangio->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Bình Khánh',
            'qh_ma'=> $huyencangio->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Thạnh An',
            'qh_ma'=> $huyencangio->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Lý Nhơn',
            'qh_ma'=> $huyencangio->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Tam Thôn Hiệp',
            'qh_ma'=> $huyencangio->qh_ma
        ]);
        $px = phuongxa::create([
            'px_ten' => 'Xã Long Hoà',
            'qh_ma'=> $huyencangio->qh_ma
        ]);




    }

}

