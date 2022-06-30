<?php

namespace App\Exports;

use App\nhanvien;
use Maatwebsite\Excel\Concerns\FromCollection;;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class NhanvienExport implements FromCollection , WithHeadings, ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $danhsachnhanvien = nhanvien::all();
        foreach ($danhsachnhanvien as $row) {
            $nhanvien[] = array(
                '0' => $row->nv_ma,
                '1' => $row->nv_ten,
                '2' => $row->nv_gioiTinh,
                '3' => $row->nv_email,
                '4' => $row->nv_ngaySinh,
                '5' => $row->nv_diaChi,
                '6' => $row->nv_dienThoai,
                '7' => $row->nv_trangThai,
                '8' => $row->danhsachquyen->q_ten,
            );
        }

        return (collect($nhanvien));
    }

    public function headings(): array
    {
        return [
            'Mã Nhân viên',
            'Tên nhân viên',
            'Giới tính',
            'Email',
            'Ngày sinh',
            'Địa chỉ',
            'Điện thoại',
            'Trạng Thái(1-khả dụng 2-Khóa)',
            'Chức vụ',
        ];
    }

}
