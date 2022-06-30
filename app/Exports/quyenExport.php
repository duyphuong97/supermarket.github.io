<?php

namespace App\Exports;

use App\quyen;
use Maatwebsite\Excel\Concerns\FromCollection;;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class quyenExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $danhsachnquyen = quyen::all();
        foreach ($danhsachnquyen as $row) {
            $quyen[] = array(
                '0' => $row->q_ma,
                '1' => $row->q_ten,
                '2' => $row->q_trangThai
            );
        }
        return (collect($quyen));
    }

    public function headings(): array
    {
        return [
            'Mã chức vụ',
            'Tên chức vụ',
            'Trạng Thái(1-khả dụng 2-Khóa)',
        ];
    }
}
