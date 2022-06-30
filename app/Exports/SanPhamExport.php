<?php

namespace App\Exports;

use App\sanpham;
use Maatwebsite\Excel\Concerns\FromCollection;;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SanphamExport implements FromCollection , WithHeadings, ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $danhsachsanpham = sanpham::all();
        foreach ($danhsachsanpham as $row) {
            $sanpham[] = array(
                '0' => $row->sp_ma,
                '1' => $row->sp_ten,
                '2' => $row->sp_giaBan,
                '3' => $row->sp_giaBan,
                '5' => $row->mausanpham->msp_ten,
                '6' => $row->loaisanpham->lsp_ten,
                '7' => $row->nhacungcap->ncc_ten,
            );
        }

        return (collect($sanpham));
    }

    public function headings(): array
    {
        return [
            'Mã sản phẩm',
            'Tên sản phẩm',
            'Giá góc',
            'Giá bán',
            'Màu sản phẩm',
            'Loại sản phẩm',
            'Nhà cung cấp',
        ];
    }

}
