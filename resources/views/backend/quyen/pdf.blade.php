<!DOCTYPE html>
<html>
<head>
    <title>Danh sách quyền</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        * {
            font-family: DejaVu Sans, sans-serif;
        }
        body {
            font-size: 10px;
        }
        table {
            border-collapse: collapse;
        }
        td {
            vertical-align: middle;
        }
        caption {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        .hinhSanPham {
            width: 100px;
            height: 100px;
        }
        .companyInfo {
            font-size: 13px;
            font-weight: bold;
            text-align: center;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <div class="row">
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
            <caption>Danh sách nhân viên</caption>
            <tr>
                <th colspan="4" align="center">Trang 1 / {{ $tongSoTrang }}</th>
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
                <th colspan="4" align="center">Trang 1 / {{ $tongSoTrang }}</th>
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
    </div>
</body>
</html>
