<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\loaisanpham;
use DB;
use Mail;
use App\mausanpham;
use App\sanpham;
use App\Mail\ContactMailer;
use App\nhanvien;
use App\quyen;
use App\khuyenmaisanpham;
use App\user_khachhang;
use App\vanchuyen;
use App\thanhtoan;
use App\khachhang;
use App\donhang;
use App\Loai;
use App\Mau;
use App\Chitietdonhang;
use Carbon\Carbon;
use App\Mail\OrderMailer;
use App\tinhthanh;
use App\quanhuyen;
use App\phuongxa;
use App\dathang;
use App\token;
use App\token1;

class FrontendController extends Controller
{
    //
    public function index(Request $request)
    {
        // Query top 3 loại sản phẩm (có sản phẩm) mới nhất
        $ds_top4_newest_loaisanpham = DB::table('loaisanpham')
            ->join('sanpham', 'loaisanpham.lsp_ma', '=', 'sanpham.lsp_ma')
            ->orderBy('loaisanpham.lsp_ma')->take(4)->get();
        // Query tìm danh sách sản phẩm
        $danhsachsanpham = $this->searchSanPham($request);
        // Query Lấy các hình ảnh liên quan của các Sản phẩm đã được lọc
        $hinhsanphamlienquan = DB::table('hinhsanphamlienquan')
        ->whereIn('sp_ma', $danhsachsanpham->pluck('sp_ma')->toArray())
        ->get();
        $khuyenmai = DB::table('khuyenmaisanpham')
        ->whereIn('sp_ma', $danhsachsanpham->pluck('sp_ma')->toArray())
        ->get();
        // Query danh sách Loại
        $loaisanpham = loaisanpham::all();

        // Query danh sách màu
        $mausanpham = mausanpham::all();
        // Query danh sách màu
        // Hiển thị view `frontend.index` với dữ liệu truyền vào
        return view('frontend.index')
            ->with('ds_top4_newest_loaisanpham', $ds_top4_newest_loaisanpham)
            ->with('danhsachsanpham', $danhsachsanpham)
            ->with('hinhsanphamlienquan', $hinhsanphamlienquan)
            ->with('loaisanpham', $loaisanpham)
            ->with('mausanpham', $mausanpham)
            ->with('khuyenmai', $khuyenmai);
    }
    /**
     * Hàm query danh sách sản phẩm theo nhiều điều kiện
     */
    private function searchSanPham(Request $request)
    {
        $query = DB::table('sanpham')->select('*');
        // Kiểm tra điều kiện `searchByLoaiMa`
        $searchByLoaiMa = $request->query('searchByLoaiMa');
        if ($searchByLoaiMa != null) {
        }
        $data = $query->get();
        return $data;
    }
    public function test(){
        return view('frontend.widgets.test');
    }
    public function getSearch(Request $request){
        $sanpham = sanpham::where('sp_ten', 'like', '%' . $request->sp_ten . '%')->get();
        $loaisanpham = loaisanpham::all();
        $hinhsanphamlienquan = DB::table('hinhsanphamlienquan')
        ->whereIn('sp_ma', $sanpham->pluck('sp_ma')->toArray())
        ->get();
        $mausanpham = mausanpham::all();
        $khuyenmai = DB::table('khuyenmaisanpham')
        ->whereIn('sp_ma', $sanpham->pluck('sp_ma')->toArray())
        ->get();
        return view('frontend.widgets.product-search')
        ->with('sanpham',$sanpham)
        ->with('hinhsanphamlienquan', $hinhsanphamlienquan)
        ->with('loaisanpham',$loaisanpham)
        ->with('mausanpham', $mausanpham)
        ->with('khuyenmai', $khuyenmai);
    }
    function autocomplete(Request $request)
    {
        if($request->get('query')){
            $query = $request->get('query');
            $data = DB::table('sanpham')->where('sp_ten', 'LIKE', "%{$query}%")->get();
            $output = '<ul class="wrap-suggestion">';
            foreach($data as $row){
                // $image = DB::table('sanpham')->where('sp_ten', $data)->value('sp_hinh')->get();
                $output .= '<li class="auto">';
                // $output .= '<img src="{{ url("storage/photos/" .$image->sp_hinh) }}" width="600" height="400">';
                $output.='<a class="dropdown-item" href="#">'.$row->sp_ten.'</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
    }


    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function sendMailContactForm(Request $request)
    {
        $input = $request->all();
        Mail::to('marketonlinelaravel1@gmail.com')->send(new ContactMailer($input));
        return $input;
    }

    public function product(Request $request)
    {
        // Query tìm danh sách sản phẩm
        $danhsachsanpham = $this->searchSanPham($request);
        // Query Lấy các hình ảnh liên quan của các Sản phẩm đã được lọc
        $hinhsanphamlienquan = DB::table('hinhsanphamlienquan')
        ->whereIn('sp_ma', $danhsachsanpham->pluck('sp_ma')->toArray())
        ->get();
        $khuyenmai = DB::table('khuyenmaisanpham')
        ->whereIn('sp_ma', $danhsachsanpham->pluck('sp_ma')->toArray())
        ->get();
        // Query danh sách Loại
        $loaisanpham = loaisanpham::all();

        // Query danh sách màu
        $mausanpham = mausanpham::all();
        // Query danh sách màu
        // Hiển thị view `frontend.index` với dữ liệu truyền vào
        return view('frontend.pages.product')
            ->with('danhsachsanpham', $danhsachsanpham)
            ->with('hinhsanphamlienquan', $hinhsanphamlienquan)
            ->with('loaisanpham', $loaisanpham)
            ->with('mausanpham', $mausanpham)
            ->with('khuyenmai', $khuyenmai);
    }

    /**
 * Action hiển thị giỏ hàng
 */
public function cart(Request $request)
{
    // Query danh sách hình thức vận chuyển
    $danhsachvanchuyen = vanchuyen::groupBy('tt_ma')->get();
    // Query danh sách phương thức thanh toán
    $danhsachphuongthucthanhtoan = Thanhtoan::all();
    $tinhthanh = tinhthanh::all();
    return view('frontend.pages.shopping-cart')
        ->with('danhsachvanchuyen', $danhsachvanchuyen)
        ->with("tinhthanh",$tinhthanh)
        ->with('danhsachphuongthucthanhtoan', $danhsachphuongthucthanhtoan);


}

function fetch(Request $request)
    {
    $select = $request->get('select');
    $value = $request->get('value');
    $dependent = $request->get('dependent');
    $data = vanchuyen::where($select, $value)->groupBy($dependent)->get();
        $output = '<option value="" selected disabled >Select </option>';
        foreach($data as $row)
        {
            if($dependent == "qh_ma"){
                $output .= '<option value="'.$row->$dependent.'">'.$row->quanhuyen->qh_ten.'</option>';
            }
            if($dependent == "px_ma"){
                $output .= '<option value="'.$row->$dependent.'">'.$row->phuongxa->px_ten.'</option>';
            }
            if($dependent == "vc_chiphi"){
                $output = NULL;
                $output .= '<option value="'.$row->$dependent.'">'.ucfirst($row->$dependent)."đ".'</option>';
            }

        }
        echo $output;

    }
public function dathang(Request $request){
    foreach($request->giohang['items'] as $sp)
    {
        $dathang = new dathang();
        $dathang->sp_ma = $sp['_id'];
        $dathang->dh_soluong = $sp['_quantity'];
        $dathang->dh_dongia = $sp['_price'];
        $dathang->dh_token = $request->donhang['token'];
        $dathang->save();
    }
    return redirect()->route('backend.vanchuyen.index');
}

public function order(Request $request)
{
    $dataMail = [];
    if(!empty($request->donhang['token'])){
        try {
            $tk = new token();
            $tk->tk = 2;
            $tk->save();

            $khachhang = new khachhang();
            $khachhang->kh_token = $tk->tk_ma;
            $khachhang->save();
            foreach($request->giohang['items'] as $sp)
            {
                $dathang = new dathang();
                $dathang->sp_ma = $sp['_id'];
                $dathang->dh_soluong = $sp['_quantity'];
                $dathang->dh_dongia = $sp['_price'];
                $dathang->dh_token = $tk->tk_ma;
                $dathang->save();
            }
        }
        catch(ValidationException $e) {
            return response()->json(array(
                'code'  => 500,
                'message' => $e,
                'redirectUrl' => route('frontend.orderFinish')
            ));
        }
        catch(Exception $e) {
            throw $e;
        }
        return response()->json(array(
            'code'  => 200,
            'message' => 'Tạo đơn hàng thành công!',
            'redirectUrl' => route('frontend.orderFinish')
        ));
    }else{
        $tk1 = new token1();
            $tk1->tk1 = 5;
            $tk1->save();

        $giatri = $tk1->tk1_ma;
        $kh = khachhang::where('kh_token',$giatri)->first();
            $kh-> kh_hoTen = $request->input('kh_hoTen');
            $kh-> kh_gioiTinh = $request->input('kh_gioiTinh');
            $kh-> kh_email = $request->input('kh_email');
            $kh-> kh_dienThoai = $request->input('kh_dienThoai');
            $kh->save();
            $dataMail['khachhang'] = $kh->toArray();

        $vanchuyen = DB::table('vanchuyen')
        ->where([
            ['tt_ma', $request->input('tt_ma')],
            ['qh_ma', $request->input('qh_ma')],
            ['px_ma', $request->input('px_ma')],
        ])->get();
        foreach ($vanchuyen as $vc) {
            $vc_ma=$vc->vc_ma;
        }
        // Tạo mới đơn hàng
        $donhang = new Donhang();
        $donhang-> kh_ma = $kh->kh_ma;
        $donhang-> dh_thoigiandathang  = Carbon::now();
        $donhang-> dh_diachi  = $request->input('dh_diachi');
        $donhang-> dh_nguoigui = $request->donhang['dh_nguoigui'];
        $donhang-> dh_dathanhtoan = 0; //Chưa thanh toán
        $donhang-> nv_xuly = 1; //Mặc định nhân viên đầu tiên
        $donhang-> dh_ngayxuly = 1; //Mặc định nhân viên đầu tiên
        $donhang-> dh_trangthai = 1; //Nhận đơn
        $donhang-> vc_ma = $vc_ma;
        $donhang-> tt_ma = $request->input('thanhtoan_ma');
        $donhang->save();
        $dataMail['donhang'] = $donhang->toArray();

        $dathang = DB::table('dathang')->where([['dh_token', $tk1->tk1_ma]])->get();
        foreach ($dathang as $sp) {
            $chitietdonhang = new Chitietdonhang();
            $chitietdonhang-> dh_ma = $donhang->dh_ma;
            $chitietdonhang-> sp_ma = $sp->sp_ma;
            $chitietdonhang-> msp_ma = 1;
            $chitietdonhang-> ctdh_soluong = $sp->dh_soluong;
            $chitietdonhang-> ctdh_dongia = $sp->dh_dongia;
            $khuyenmai = DB::table('khuyenmaisanpham')->where('sp_ma', $sp->sp_ma)->get();
            if(empty($khuyenmai)){
                $chitietdonhang-> kmsp_giatri="0";
            }else{
                foreach($khuyenmai as $km){
                    $chitietdonhang-> kmsp_giatri = $km->kmsp_giatri;
                }
            }
            $chitietdonhang->save();
        }
        $result = json_decode(json_encode($dataMail),true);
        Mail::to($kh->kh_email)->send(new OrderMailer($result));
        $chitietdonhang = DB::table('chitietdonhang')->where('dh_ma', $donhang->dh_ma)->get();
        return view('frontend.pages.sendmail')
        ->with('chitietdonhang',$chitietdonhang);
    }
}

public function orderFinish()
{
    // Query danh sách hình thức vận chuyển
    $danhsachvanchuyen = vanchuyen::groupBy('tt_ma')->get();
    // Query danh sách phương thức thanh toán
    $danhsachphuongthucthanhtoan = Thanhtoan::all();
    $tinhthanh = tinhthanh::all();
    return view('frontend.pages.order-finish')
        ->with('danhsachvanchuyen', $danhsachvanchuyen)
        ->with("tinhthanh",$tinhthanh)
        ->with('danhsachphuongthucthanhtoan', $danhsachphuongthucthanhtoan);
}

public function sendmail()
{
    return view('frontend.pages.sendmail');
}

    public function pay(Request $request)
    {
        return view('frontend.pages.pay');
    }
}
