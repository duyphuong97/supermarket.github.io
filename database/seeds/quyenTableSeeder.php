<?php

use Illuminate\Database\Seeder;
use App\quyen;
use Illuminate\Support\Facades\DB;
class quyenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $list = [];
        $types =["Admin","Giám đóc","Quản lý nhân sự","Quản lý sản phẩm","kế toán","Nhân viên vận chuyển"];
        sort($types);
        for ($i=1; $i <=count($types); $i++) {
            array_push($list,[
                'q_ma'=>$i,
                'q_ten'=>$types[$i-1]
            ]);
        }
        DB::table('quyen')->insert($list);
    }
}
