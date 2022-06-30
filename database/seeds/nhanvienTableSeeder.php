<?php

use Illuminate\Database\Seeder;
use App\quyen;
use App\nhanvien;

class nhanvienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Admin = quyen::where('q_ma', '1')->first();
        $giamdoc = quyen::where('q_ma', '2')->first();
        $nhanvienvanchuyen = quyen::where('q_ma', '3')->first();
        $quanlynhansu = quyen::where('q_ma', '4')->first();
        $quanlysanpham = quyen::where('q_ma', '5')->first();
        $ketoan = quyen::where('q_ma', '6')->first();

        $Nhanvien1 = nhanvien::create([
            'nv_ten' => 'nhân viên 1',
            'nv_gioiTinh' => 'Nam',
            'nv_email' => 'nhanvien1@gmail.com',
            'nv_ngaySinh'=>'1997-02-20',
            'nv_diaChi'=>'không',
            'nv_dienThoai'=>'0000000000',
            'q_ma'=> $giamdoc->q_ma
        ]);
        $Nhanvien1 = nhanvien::create([
            'nv_ten' => 'nhân viên 2',
            'nv_gioiTinh' => 'Nữ',
            'nv_email' => 'nhanvien2@gmail.com',
            'nv_ngaySinh'=>'1997-02-20',
            'nv_diaChi'=>'không',
            'nv_dienThoai'=>'0000000000',
            'q_ma'=>$nhanvienvanchuyen->q_ma
        ]);
        $Nhanvien1 = nhanvien::create([
            'nv_ten' => 'nhân viên 3',
            'nv_gioiTinh' => 'Nam',
            'nv_email' => 'nhanvien3@gmail.com',
            'nv_ngaySinh'=>'1997-02-20',
            'nv_diaChi'=>'không',
            'nv_dienThoai'=>'0000000000',
            'q_ma'=>$quanlynhansu->q_ma
        ]);
        $Nhanvien1 = nhanvien::create([
            'nv_ten' => 'nhân viên 4',
            'nv_gioiTinh' => 'Nữ',
            'nv_email' => 'nhanvien4@gmail.com',
            'nv_ngaySinh'=>'1997-02-20',
            'nv_diaChi'=>'không',
            'nv_dienThoai'=>'0000000000',
            'q_ma'=> $quanlysanpham->q_ma
        ]);
        $Nhanvien1 = nhanvien::create([
            'nv_ten' => 'nhân viên 5',
            'nv_gioiTinh' => 'Nam',
            'nv_email' => 'nhanvien5@gmail.com',
            'nv_ngaySinh'=>'1997-02-20',
            'nv_diaChi'=>'không',
            'nv_dienThoai'=>'0000000000',
            'q_ma'=>$Admin->q_ma
        ]);
        $Nhanvien1 = nhanvien::create([
            'nv_ten' => 'nhân viên 6',
            'nv_gioiTinh' => 'nữ',
            'nv_email' => 'nhanvien6@gmail.com',
            'nv_ngaySinh'=>'1997-02-20',
            'nv_diaChi'=>'không',
            'nv_dienThoai'=>'0000000000',
            'q_ma'=>$ketoan->q_ma
        ]);
    }
}
