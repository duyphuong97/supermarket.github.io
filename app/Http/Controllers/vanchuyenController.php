<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vanchuyen;
use App\tinhthanh;
use App\quanhuyen;
use App\phuongxa;
use DB;
use App\quyen;
use Session;

class vanchuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $danhsachvanchuyen = vanchuyen::all();
        return view('backend.vanchuyen.index')
        ->with('danhsachvanchuyen',$danhsachvanchuyen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
            $tinhthanh = tinhthanh::all();
            return view('backend.vanchuyen.create')->with("tinhthanh",$tinhthanh);
        }

        public function getquanhuyenList(Request $request)
        {
            $quanhuyen = DB::table("quanhuyen")
            ->where("tt_ma",$request->tt_ma)
            ->pluck("qh_ten","qh_ma");
            return response()->json($quanhuyen);
        }

        public function getphuongxaList(Request $request)
        {
            $phuongxa = DB::table("phuongxa")
            ->where("qh_ma",$request->qh_ma)
            ->pluck("px_ten","px_ma");
            return response()->json($phuongxa);
        }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vc = new vanchuyen();
        $vc -> tt_ma = $request -> input('tinhthanh');
        $vc -> qh_ma = $request -> input('quanhuyen');
        $vc -> px_ma = $request -> input('phuongxa');
        $vc -> vc_chiphi = $request -> input('vc_chiphi');
        $vc -> vc_thoigian = $request -> input('vc_thoigian');
        $vc->save();
        Session::flash('alert-success', 'Thêm mới thành công ^^~!!!');
        return redirect()->route('backend.vanchuyen.index');

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
        $vc = vanchuyen::where("vc_ma",$id)->first();
        $tinhthanh = tinhthanh::all();
        $quanhuyen = quanhuyen::all();
        $phuongxa = phuongxa::all();
        return view('backend.vanchuyen.edit')
        ->with("vc",$vc)
        ->with("tinhthanh",$tinhthanh)
        ->with("quanhuyen",$quanhuyen)
        ->with("phuongxa",$phuongxa);
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
        $vc = vanchuyen::where("vc_ma",  $id)->first();
        $vc -> vc_chiphi = $request-> input('vc_chiphi');
        $vc -> vc_thoigian = $request-> input('vc_thoigian');
        $vc -> save();
        Session::flash('alert-success', 'cập nhật thành công ^^~!!!');

        return redirect()->route('backend.vanchuyen.index');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vc = DB::table("vanchuyen")->where("vc_ma",$id);
        $vc->delete();
        Session::flash('alert-success', 'xóa thành công ^^~!!!');
        return redirect()->route('backend.vanchuyen.index');
    }
}
