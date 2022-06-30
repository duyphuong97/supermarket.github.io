<?php

namespace App\Exports;

use App\loaisanpham;
use Maatwebsite\Excel\Concerns\FromCollection;;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class loaisanphamExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $danhsachloaisanpham = loaisanpham::all();
        foreach ($danhsachloaisanpham as $row) {
            $loaisanpham[] = array(
                '0' => $row->lsp_ma,
                '1' => $row->lsp_ten,
                '2' => $row->lsp_capNhat
            );
        }
        return (collect($loaisanpham));
    }

    public function headings(): array
    {
        return [
            'Mã loại sản phẩm',
            'Tên loại sản phẩm',
            'Ngày cập nhật',
        ];
    }
}
