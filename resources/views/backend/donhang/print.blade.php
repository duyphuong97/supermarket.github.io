@extends('print.layout.paper')

@section('title')
Dơn hàng của bạn
@endsection

@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection

@section('custom-css')
@endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <table border="0" align="center">
            <tr>
                <td class="companyInfo" align="center">
                    MarketOnline<br />
                    Địa chỉ:
                </td>
            </tr>
        </table>
        <br />
        <br />
        <table border="1" align="center" cellpadding="5">
                <thead>
                    <tr>
                        <th >STT</th>
                        <th>Tên sân Phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá bán giá</th>
                        <th>Khuyến mải</th>
                        <th>Thanh Tiền</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        $stt = 1;
                        $tongtien =0;
                        ?>
                        @foreach($chitietdonhang as $ctdh)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $ctdh->sanpham->sp_ten}}</td>
                            <td>{{ $ctdh->ctdh_soluong}}</td>
                            <td>{{ $ctdh->sanpham->sp_giaBan}}đ</td>
                            <td>{{ $ctdh->kmsp_giatri}}</td>
                            <td> {{ $ctdh->ctdh_dongia }}đ</td>
                        </tr>
                        <?php
                        $stt++;
                        $tongtien = $tongtien+$ctdh->ctdh_dongia;
                        ?>
                        @endforeach
                        <?php $cpvc = $ctdh->donhang->vanchuyen->vc_chiphi;?>
                        <tr>
                                <th align="left" colspan="5">Phí vận chuyển</th>
                                <th> {{ $cpvc }}đ</th>
                            </tr>
                        <tr>
                            <th align="left" colspan="5">Tổng thanh toán</th>
                            <th > {{ $tongtien + $cpvc }}đ</th>
                        </tr>
                        <?php if(($ctdh->donhang->khachhang->kh_gioiTinh)==0){
                            $gt = "Nữ";
                        }elseif(($ctdh->donhang->khachhang->kh_gioiTinh)==1){
                            $gt= "Nam";
                        }else{
                            $gt = "Khác";
                        }
                        ?>
                        <tr>
                            <td colspan="6">
                                <b> Họ Tên khách hàng:</b>{{ $ctdh->donhang->khachhang->kh_hoTen }}
                                <br>
                                <b>Giới Tính:</b> {{ $gt }}
                                <br>
                                <b>Điện thoại khách hàng:</b>{{ $ctdh->donhang->khachhang->kh_dienThoai }}
                                <br>
                                <b>Địa chỉ nhận hàng:</b>{{ $ctdh->donhang->dh_diachi }}
                                -{{ $ctdh->donhang->vanchuyen->phuongxa->px_ten }}-
                                {{ $ctdh->donhang->vanchuyen->quanhuyen->qh_ten }}
                                -{{ $ctdh->donhang->vanchuyen->tinhthanh->tt_ten }}
                            </td>
                        </tr>
                </tbody>
        </table>
    </article>
</section>
@endsection
