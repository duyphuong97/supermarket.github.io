@extends('print.layout.paper')
@section('title')
Biểu mẫu Phiếu in danh sách sản phẩm
@endsection
@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection
@section('custom-css')
<style>
    .hinhSanPham {
        width: 100px;
        height: 100px;
    }
    .companyInfo {
        font-size: 13px;
        font-weight: bold;
        text-align: center;
    }
</style>
@endsection
@section('content')
<section class="sheet padding-10mm">
    <article>
        <table border="0" align="center">
            <tr>
                <td class="companyInfo" align="center">
                    Marketonline<br />
                    http://marketonline.com/<br />
                    0364 000 0000 <br>
                </td>
            </tr>
        </table>
        <?php
        $tongSoTrang = ceil(count($sanpham)/7);
            ?>
        <table border="1" align="center" cellpadding="5">
            <caption>Danh sách quyền</caption>
            <tr>
                <th colspan="9" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th >STT</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá góc</th>
                <th>Giá bán</th>
                <th>Hình sản phẩm</th>
                <th>Màu sản phẩm</th>
                <th>Thuộc loại</th>
                <th>Nhà cung cấp</th>

            </tr>
            @foreach ($sanpham as $sp)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="left">{{ $sp->sp_ma }}</td>
                <td align="left">{{ $sp->sp_ten }}</td>
                <td align="left">{{ $sp->sp_giaBan}}</td>
                <td align="left">{{ $sp->sp_giaBan}}</td>
                <td align="center">
                    <img class="hinhSanPham" src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" />
                </td>
                <td align="left">{{ $sp->mausanpham->msp_ten}}</td>
                <td align="left">{{ $sp->loaisanpham->lsp_ten}}</td>
                <td align="left">{{ $sp->nhacungcap->ncc_ten}}</td>

            </tr>
            @if (($loop->index + 1) % 7 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <th colspan="9" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th >STT</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá góc</th>
                <th>Giá bán</th>
                <th>Hình sản phẩm</th>
                <th>Màu sản phẩm</th>
                <th>Thuộc loại</th>
                <th>Nhà cung cấp</th>
            </tr>
            <br>
            <br>
            @endif
            @endforeach
        </table>
    </article>
</section>
@endsection
