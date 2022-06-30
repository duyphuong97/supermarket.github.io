<?php

namespace App\Http\Controllers;

use App\mausanpham;
use App\nhacungcap;
use Illuminate\Http\Request;
use App\sanpham;
use App\loaisanpham;
use Session;
use Excel;
use App\Exports\SanPhamExport;
use App\khuyenmaisanpham;
use DB;
use Barryvdh\DomPDF\Facade as PDF;
class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $danhsachsanpham = Sanpham::all();
        //$danhsachsanpham = khuyenmaisanpham::all();
        return view('backend.sanpham.index')
        ->with('danhsachsanpham',$danhsachsanpham);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaisanpham = loaisanpham::all();
        $nhacungcap= nhacungcap::all();
        $mausanpham = mausanpham::all();
        return view('backend.sanpham.create')
        ->with('loaisanpham',$loaisanpham)
        ->with('nhacungcap',$nhacungcap)
        ->with('mausanpham',$mausanpham);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $sp = new sanpham();
        $sp -> sp_ten = $request-> input('sp_ten');
        $sp -> sp_giaBan = $request-> input('sp_giaBan');
        $sp -> sp_hinh = $request-> input('sp_hinh');
        $sp -> msp_ma = $request-> input('msp_ma');
        $sp -> lsp_ma = $request -> input('lsp_ma');
        $sp -> ncc_ma = $request -> input('ncc_ma');
        $sp -> sp_gichu = $request -> input('sp_gichu');
        $sp -> sp_capNhat = $request -> input('sp_capNhat');

        if($request->hasFile('sp_hinh'))
        {
            $file = $request->sp_hinh;
            // Lưu tên hình vào column sp_hinh
            $sp->sp_hinh = $file->getClientOriginalName();

            // Chép file vào thư mục "photos"
            $file->move('storage/photos', $file->getClientOriginalName());
        }
        $sp -> save();

        Session::flash('alert-warning', 'Thêm mới thành công ^^~!!!');

        return redirect()->route('backend.sanpham.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sp = sanpham::where("sp_ma", $id)->first();
        $loaisanpham = loaisanpham::all();
        $nhacungcap= nhacungcap::all();
        $mausanpham = mausanpham::all();
        return view('backend.sanpham.edit')
        ->with('sp', $sp)
        ->with('loaisanpham',$loaisanpham)
        ->with('nhacungcap',$nhacungcap)
        ->with('mausanpham',$mausanpham);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $sp = sanpham::where("sp_ma",  $id)->first();
        $sp -> sp_ten = $request-> sp_ten;
        $sp -> sp_giaBan = $request-> sp_giaBan;
        $sp -> sp_hinh = $request-> sp_hinh;
        $sp -> msp_ma = $request-> msp_ma;
        $sp -> lsp_ma = $request -> lsp_ma;
        $sp -> ncc_ma = $request -> ncc_ma;
        $sp -> sp_gichu = $request -> sp_gichu;
        if($request->hasFile('sp_hinh'))
        {
            $file = $request->sp_hinh;
            // Lưu tên hình vào column sp_hinh
            $sp->sp_hinh = $file->getClientOriginalName();

            // Chép file vào thư mục "photos"
            $file->move('storage/photos', $file->getClientOriginalName());
        }
        $sp -> save();
        Session::flash('alert-warning', 'cập nhật thành công ^^~!!!');

        return redirect()->route('backend.sanpham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sp = sanpham::where("sp_ma",  $id)->first();
        $sp->delete();
        Session::flash('alert-success', 'xóa thành công ^^~!!!');
        return redirect()->route('backend.sanpham.index');

    }

    public function print()
    {
        $sanpham = sanpham::all();
        $loaisanpham = loaisanpham::all();
        $nhacungcap= nhacungcap::all();
        $mausanpham = mausanpham::all();
        return view('backend.sanpham.print')
            ->with('sanpham', $sanpham)
            ->with('loaisanpham', $loaisanpham)
            ->with('nhacungcap', $nhacungcap)
            ->with('mausanpham', $mausanpham);
    }

    public function excel()
    {
        return Excel::download(new SanPhamExport(), 'danhsachsanpham.xlsx');
    }

    public function pdf()
    {
        $sanpham = sanpham::all();
        $loaisanpham = loaisanpham::all();
        $nhacungcap= nhacungcap::all();
        $mausanpham = mausanpham::all();
        $data = [
            'sanpham'    => $sanpham,
            'loaisanpham'=> $loaisanpham,
            'nhacungcap' => $nhacungcap,
            'mausanpham' => $mausanpham,
        ];
        $pdf = PDF::loadView('backend.sanpham.pdf', $data);
        return $pdf->download('danhsachsanpham.pdf');
    }
}
