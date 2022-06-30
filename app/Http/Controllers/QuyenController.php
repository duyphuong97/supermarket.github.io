<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quyen;
use Session;
use Excel;
use App\Exports\quyenExport;
use Barryvdh\DomPDF\Facade as PDF;
class QuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $danhsachquyen = quyen::all();
        return view('backend.quyen.index')
        ->with('danhsachquyen',$danhsachquyen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.quyen.create');

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
        $q = new quyen();
        $q -> q_ten = $request-> input('q_ten');
        $q -> q_trangThai = $request->input('q_trangThai');
        $q -> save();
        Session::flash('alert-success', 'Thêm mới thành công ^^~!!!');
        return redirect()->route('backend.quyen.index');
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
        $danhsachquyen = quyen::where("q_ma", $id)->first();
        return view('backend.quyen.edit')
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
        $q = quyen::where("q_ma",  $id)->first();
        $q -> q_ten = $request-> input('q_ten');
        $q -> q_trangThai = $request->input('q_trangThai');
        $q -> save();
        Session::flash('alert-success', 'cập nhật thành công ^^~!!!');

        return redirect()->route('backend.quyen.index');

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
        $q = quyen::where("q_ma",  $id)->first();
        $q->delete();
        Session::flash('alert-success', 'xóa thành công ^^~!!!');
        return redirect()->route('backend.quyen.index');
    }

    public function print()
    {
        $danhsachquyen= quyen::all();
        return view('backend.quyen.print')
            ->with('danhsachquyen', $danhsachquyen);
    }

    public function excel()
    {
        return Excel::download(new quyenExport(), 'danhsachquyen.xlsx');
    }

    public function pdf()
    {
        $danhsachquyen    = quyen::all();
        $data = [
            'danhsachquyen'    => $danhsachquyen,
        ];
        $pdf = PDF::loadView('backend.quyen.pdf', $data);
        return $pdf->download('Danhsachquyen.pdf');
    }
}
