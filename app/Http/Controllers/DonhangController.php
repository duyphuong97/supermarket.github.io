<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chitietdonhang;
use App\donhang;
use App\khachhang;
use App\nhanvien;
use App\thanhtoan;
use App\vanchuyen;
use App\sanpham;
use App\mausanpham;
use Session;
use Excel;
use DB;
use Barryvdh\DomPDF\Facade as PDF;

class DonhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.donhang.index');
    }
    public function donhangchuaxuly()
    {
        //
        $donhang = donhang::where('dh_trangthai', '=', 1)->get();
        return view('backend.donhang.donhangchuaxuly')
        ->with('donhang',$donhang);
    }

    public function xulydonhang($id)
    {
        //
        $chitietdonhang = chitietdonhang::where('dh_ma', '=', $id)->get();
        return view('backend.donhang.xulydonhang')
        ->with("chitietdonhang",$chitietdonhang);
    }
    public function update($id)
    {
        $donhang = donhang::where('dh_ma', '=', $id)->first();
        $donhang -> dh_trangthai = 2;
        $donhang -> save();
        return redirect()->route('backend.xulydonhang.print');
    }
    public function print($id)
    {
        $chitietdonhang = chitietdonhang::where('dh_ma', '=', $id)->get();
        $donhang = donhang::where('dh_ma', '=', $id)->first();
        $donhang -> dh_trangthai = 2;
        $donhang -> save();
        return view('backend.donhang.print')
        ->with("chitietdonhang",$chitietdonhang);
    }

    public function danggiao()
    {
        //
        $donhang = donhang::where('dh_trangthai', '=', 2)->get();
        return view('backend.donhang.danggiao')
        ->with('donhang',$donhang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
