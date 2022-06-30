<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaisanpham;
use Session;
use Excel;
use App\Exports\loaisanphamExport;
use Barryvdh\DomPDF\Facade as PDF;
class LoaisanphamController extends Controller
{
    /**
     * Dlsplay a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $danhsachloaisanpham = loaisanpham::all();
        return view('backend.loaisanpham.index')
        ->with('danhsachloaisanpham',$danhsachloaisanpham);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.loaisanpham.create');

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
        $q = new loaisanpham();
        $q -> lsp_ten = $request-> input('lsp_ten');
        $q -> lsp_capNhat = $request->input('lsp_capNhat');
        $q -> save();
        Session::flash('alert-success', 'Thêm mới thành công ^^~!!!');
        return redirect()->route('backend.loaisanpham.index');
    }

    /**
     * Dlsplay the specified resource.
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
        $danhsachloaisanpham = loaisanpham::where("lsp_ma", $id)->first();
        return view('backend.loaisanpham.edit')
            ->with('danhsachloaisanpham',$danhsachloaisanpham);
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
        $q = loaisanpham::where("lsp_ma",  $id)->first();
        $q -> lsp_ten = $request-> input('lsp_ten');
        $q -> lsp_capNhat = $request->input('lsp_capNhat');
        $q -> save();
        Session::flash('alert-success', 'cập nhật thành công ^^~!!!');

        return redirect()->route('backend.loaisanpham.index');

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
        $q = loaisanpham::where("lsp_ma",  $id)->first();
        $q->delete();
        Session::flash('alert-success', 'xóa thành công ^^~!!!');
        return redirect()->route('backend.loaisanpham.index');
    }

    public function print()
    {
        $danhsachloaisanpham= loaisanpham::all();
        return view('backend.loaisanpham.print')
            ->with('danhsachloaisanpham', $danhsachloaisanpham);
    }

    public function excel()
    {
         return Excel::download(new loaisanphamExport(), 'danhsachloaisanpham.xlsx');
    }

    public function pdf()
    {
        $danhsachloaisanpham    = loaisanpham::all();
        $data = [
            'danhsachloaisanpham'    => $danhsachloaisanpham,
        ];
        $pdf = PDF::loadView('backend.loaisanpham.pdf', $data);
        return $pdf->download('danhsachloaisanpham.pdf');
    }
    public function getSearch(Request $request){
        $loaisanpham = loaisanpham::where('lsp_ten', 'like', '%' . $request->lsp_ten . '%')->get();
        return view('frontend.widgets.product-searchloaisanpham');
        
        // $hinhsanphamlienquan = DB::table('hinhsanphamlienquan')
        // ->whereIn('lsp_ma', $sanpham->pluck('lsp_ma')->toArray())
        // ->get();
        // $mausanpham = mausanpham::all();
        // $khuyenmai = DB::table('khuyenmaisanpham')
        // ->whereIn('lsp_ma', $sanpham->pluck('lsp_ma')->toArray())
        // ->get();
        // return view('frontend.widgets.product-search')
        // ->with('sanpham',$sanpham)
        // ->with('hinhsanphamlienquan', $hinhsanphamlienquan)
        // ->with('loaisanpham',$loaisanpham)
        // ->with('mausanpham', $mausanpham)
        // ->with('khuyenmai', $khuyenmai);
    }
    // function autocomplete(Request $request)
    // {
    //     if($request->get('query')){
    //         $query = $request->get('query');
    //         $data = DB::table('loaisanpham')->where('lsp_ten', 'LIKE', "%{$query}%")->get();
    //         $output = '<ul class="wrap-suggestion">';
    //         foreach($data as $row){
    //             // $image = DB::table('sanpham')->where('lsp_ten', $data)->value('sp_hinh')->get();
    //             $output .= '<li class="auto">';
    //             // $output .= '<img src="{{ url("storage/photos/" .$image->sp_hinh) }}" width="600" height="400">';
    //             $output.='<a class="dropdown-item" href="#">'.$row->lsp_ten.'</a></li>';
    //         }
    //         $output .= '</ul>';
    //         echo $output;
    //     }
    // }
    
    // private function searchSanPham(Request $request)
    // {
    //     $query = DB::table('loaisanpham')->select('*');
    //     // Kiểm tra điều kiện `searchByLoaiMa`
    //     $searchByLoaiMa = $request->query('searchByLoaiMa');
    //     if ($searchByLoaiMa != null) {
    //     }
    //     $data = $query->get();
    //     return $data;
    // }

}
