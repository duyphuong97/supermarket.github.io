<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BaoCaoController extends Controller
{
    public function donhang()
    {
        return view('backend.reports.donhang');
    }

    public function donhangData(Request $request)
    {
        $parameter = [
            'tuNgay' => $request->tuNgay,
            'denNgay' => $request->denNgay
        ];
        // dd($parameter);
        $data = DB::select('
            SELECT dh.dh_thoigiandathang as thoiGian
                , SUM(ctdh.ctdh_soluong * ctdh.ctdh_dongia) as tongThanhTien
            FROM donhang dh
            JOIN chitietdonhang ctdh ON dh.dh_ma = ctdh.dh_ma
            WHERE dh.dh_thoigiandathang BETWEEN :tuNgay AND :denNgay
            GROUP BY dh.dh_thoigiandathang
        ', $parameter);
        return response()->json(array(
            'code'  => 200,
            'data' => $data,
        ));
    }
}
