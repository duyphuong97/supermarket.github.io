<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use App\quyen;
use Session;
use Excel;
use App\Exports\NhanvienExport;
use Barryvdh\DomPDF\Facade as PDF;
class NhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $danhsachnhanvien = nhanvien::all();
        return view('backend.nhanvien.index')
        ->with('danhsachnhanvien',$danhsachnhanvien);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $danhsachquyen = quyen::all();
        return view('backend.nhanvien.create')
        ->with('danhsachquyen',$danhsachquyen);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $nv = new Nhanvien();
        $nv -> nv_ten = $request-> input('nv_ten');
        $nv -> nv_gioiTinh= $request-> input('nv_gioiTinh');
        $nv -> nv_email = $request-> input('nv_email');
        $nv -> nv_ngaySinh = $request-> input('nv_ngaySinh');
        $nv -> nv_diaChi = $request-> input('nv_diaChi');
        $nv -> nv_dienThoai = $request-> input('nv_dienThoai');
        $nv -> nv_trangThai = $request->input('nv_trangThai');
        $nv -> q_ma = $request -> input('q_ma');
        $nv -> save();
        Session::flash('alert-success', 'Thêm mới thành công ^^~!!!');
        return redirect()->route('backend.nhanvien.index');
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
        $nv = Nhanvien::where("nv_ma", $id)->first();
        $danhsachquyen = quyen::all();
        return view('backend.nhanvien.edit')
            ->with('nv', $nv)
            ->with('danhsachquyen',$danhsachquyen);
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
        $nv = Nhanvien::where("nv_ma",  $id)->first();
        $nv-> nv_ten = $request->nv_ten;
        $nv-> nv_gioiTinh= $request->nv_gioiTinh;
        $nv-> nv_email = $request->nv_email;
        $nv-> nv_ngaySinh = $request->nv_ngaySinh;
        $nv-> nv_diaChi = $request->nv_diaChi;
        $nv-> nv_dienThoai = $request->nv_dienThoai;
        $nv-> nv_trangThai = $request->nv_trangThai;
        $nv-> q_ma = $request->q_ma;
        $nv-> save();
        Session::flash('alert-success', 'cập nhật thành công ^^~!!!');

        return redirect()->route('backend.nhanvien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $nv = Nhanvien::where("nv_ma",  $id)->first();
        $nv->delete();
        Session::flash('alert-success', 'xóa thành công ^^~!!!');
        return redirect()->route('backend.nhanvien.index');
    }

    public function print()
    {
        $danhsachnhanvien = nhanvien::all();
        $danhsachquyen    = quyen::all();
        return view('backend.nhanvien.print')
            ->with('danhsachnhanvien', $danhsachnhanvien)
            ->with('danhsachquyen', $danhsachquyen);
    }

    public function excel()
    {
        return Excel::download(new NhanvienExport(), 'danhsachnhanvien.xlsx');
    }

    public function pdf()
    {
        $danhsachnhanvien = nhanvien::all();
        $danhsachquyen    = quyen::all();
        $data = [
            'danhsachnhanvien' => $danhsachnhanvien,
            'danhsachquyen'    => $danhsachquyen,
        ];
        $pdf = PDF::loadView('backend.nhanvien.pdf', $data);
        return $pdf->download('Danhsachnhanvien.pdf');
    }
}
