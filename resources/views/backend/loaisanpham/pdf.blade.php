<!DOCTYPE html>
<html>
<head>
    <title>Danh sách Loại Sản Phẩm</title>
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
        $tongSoTrang = ceil(count($danhsachloaisanpham)/15);
        ?>
        <table border="1" align="center" cellpadding="5">
            <caption>Danh sách loại sản phẩm</caption>
            <tr>
                <th colspan="4" align="center">Trang 1 / {{ $tongSoTrang }}</th>
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
                <th colspan="4" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th >STT</th>
                <th>Mã loại sản phẩm</th>
                <th>Họ tên loại sản phẩm</th>
                <th>Ngày Cập Nhật</th>
            </tr>
            @endif
            @endforeach
        </table>
    </div>
</body>
</html>
