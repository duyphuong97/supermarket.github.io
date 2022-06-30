<?php

namespace App\Http\Controllers;

use App\khuyenmaisanpham;
use App\nhanvien;
use App\sanpham;
use Session;
use Illuminate\Http\Request;

class KhuyenmaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhsachkhuyenmai = khuyenmaisanpham::all();
        return view('backend.khuyenmai.index')
        ->with('danhsachkhuyenmai',$danhsachkhuyenmai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhsachsanpham = sanpham::all();
        $danhsachnhanvien = nhanvien::all();
        return view('backend.khuyenmai.create')
        ->with('danhsachsanpham',$danhsachsanpham)
        ->with('danhsachnhanvien',$danhsachnhanvien);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kmsp = new khuyenmaisanpham();
        $kmsp -> sp_ma = $request -> input('sp_ma');
        $kmsp -> kmsp_noidung = $request -> input('kmsp_noidung');
        $kmsp -> kmsp_giatri = $request -> input('kmsp_giatri');
        $kmsp -> kmsp_ngaybatdau = $request ->input('kmsp_ngaybatdau');
        $kmsp -> kmsp_ngayketthuc = $request ->input('kmsp_ngayketthuc');
        $kmsp -> kmsp_trangthai = $request ->input('kmsp_trangthai');
        $kmsp -> nv_nguoilap = $request -> input('nv_nguoilap');
        $kmsp -> kmsp_ngaylap = $request -> input('kmsp_ngaylap');
        Session::flash('alert-success', 'Thêm mới thành công ^^~!!!');
        $kmsp -> save();
        return redirect()->route('backend.khuyenmai.index');
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
        $kmsp = khuyenmaisanpham::where("kmsp_ma",$id)->first();
        $danhsachnhanvien = nhanvien::all();
        $danhsachsanpham = sanpham::all();
        return view('backend.khuyenmai.edit')
        ->with('kmsp',$kmsp)
        ->with('danhsachnhanvien',$danhsachnhanvien)
        ->with('danhsachsanpham',$danhsachsanpham);
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
        $kmsp = khuyenmaisanpham::where("kmsp_ma",$id)->first();
        $kmsp -> sp_ma = $request ->sp_ma ;
        $kmsp -> kmsp_noidung = $request ->kmsp_noidung ;
        $kmsp -> kmsp_giatri = $request ->kmsp_giatri ;
        $kmsp -> kmsp_ngaybatdau = $request ->kmsp_ngaybatdau ;
        $kmsp -> kmsp_ngayketthuc = $request ->kmsp_ngayketthuc ;
        $kmsp -> kmsp_trangthai = $request ->kmsp_trangthai ;
        $kmsp -> nv_nguoilap = $request ->nv_nguoilap ;
        $kmsp -> kmsp_ngaylap = $request ->kmsp_ngaylap ;
        Session::flash('alert-success', 'Cập nhật thành công ^^~!!!');
        $kmsp -> save();
        return redirect()->route('backend.khuyenmai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nv = khuyenmaisanpham::where("kmsp_ma",  $id)->first();
        $nv->delete();
        Session::flash('alert-success', 'xóa thành công ^^~!!!');
        return redirect()->route('backend.khuyenmai.index');
    }
}
