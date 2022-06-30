@extends('print.layout.paper')
@section('title')
Biểu mẫu Phiếu in danh sách  loại sản phẩm
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
                    Marketonline<br />
                    http://marketonline.com/<br />
                    0364 000 0000 <br>
                </td>
            </tr>
        </table>
        <br />
        <br />
        <?php
        $tongSoTrang = ceil(count($danhsachloaisanpham)/15);
            ?>
        <table border="1" align="center" cellpadding="5">
            <caption>Danh sách loại sản phẩm</caption>
            <tr>
                <th colspan="10" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th >STT</th>
                <th>Mã Loại Sản Phẩm</th>
                <th>Tên Loại Sản Phẩm</th>
                <th>Ngày Cập Nhật</font></th>
            </tr>
            @foreach ($danhsachloaisanpham as $q)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="left">{{ $q->lsp_ma }}</td>
                <td align="left">{{ $q->lsp_ten }}</td>
                <td align="left">{{ $q->lsp_capNhat}}</td>
            </tr>
            @if (($loop->index + 1) % 15 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <th colspan="10" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th >STT</th>
                <th>Mã Loại Sản Phẩm</th>
                <th>Tên Loại Sản Phẩm</th>
                <th>Ngày Cập Nhật</th>
            </tr>
            @endif
            @endforeach
        </table>
    </article>
</section>
@endsection
