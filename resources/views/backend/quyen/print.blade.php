@extends('print.layout.paper')
@section('title')
Biểu mẫu Phiếu in danh sách quyền
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
        $tongSoTrang = ceil(count($danhsachquyen)/15);
            ?>
        <table border="1" align="center" cellpadding="5">
            <caption>Danh sách quyền</caption>
            <tr>
                <th colspan="10" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th >STT</th>
                <th>Mã quyền</th>
                <th>tên qyền</th>
                <th>Trạng Thái <br><font size = 1>(1-kha dụng, 2-khóa)</font></th>
            </tr>
            @foreach ($danhsachquyen as $q)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="left">{{ $q->q_ma }}</td>
                <td align="left">{{ $q->q_ten }}</td>
                <td align="left">{{ $q->q_trangThai}}</td>
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
                <th>Mã quyền</th>
                <th>tên qyền</th>
                <th>Trạng Thái <br><font size = 1>(1-kha dụng, 2-khóa)</font></th>
            </tr>
            @endif
            @endforeach
        </table>
    </article>
</section>
@endsection
