<!DOCTYPE html>
<html>
<head>
    <title>Danh sách nhân viên</title>
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
        $tongSoTrang = ceil(count($danhsachnhanvien)/15);
         ?>
        <table border="1" align="center" cellpadding="5">
            <caption>Danh sách nhân viên</caption>
            <tr>
                <th colspan="10" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th >STT</th>
                <th>Mã nhân viên</th>
                <th>Họ tên Nhân viên</th>
                <th>Ngày Sinh</th>
                <th>Giới tính </th>
                <th>Email </th>
                <th>Trạng Thái <br><font size = 1>(1-kha dụng, 2-khóa)</font></th>
                <th>Địa chỉ</th>
                <th>Điện Thoại</th>
                <th>Chức vụ</th>
            </tr>
            @foreach ($danhsachnhanvien as $nv)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="left">{{ $nv->nv_ma }}</td>
                <td align="left">{{ $nv->nv_ten }}</td>
                <td align="left">{{ $nv->nv_ngaySinh}}</td>
                <td align="left">{{ $nv->nv_gioiTinh }}</td>
                <td align="left">{{ $nv->nv_email}}</td>
                <td align="left">{{ $nv->nv_trangThai}}</td>
                <td align="left">{{ $nv->nv_diaChi }}</td>
                <td align="left">{{ $nv->nv_dienThoai }}</td>
                <td align="left">{{ $nv->danhsachquyen->q_ten}}</td>
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
                <th>Mã nhân viên</th>
                <th>Họ tên Nhân viên</th>
                <th>Ngày Sinh</th>
                <th>Giới tính </th>
                <th>Email </th>
                <th>Trạng Thái <br><font size = 1>(1-kha dụng, 2-khóa)</font></th>
                <th>Địa chỉ</th>
                <th>Điện Thoại</th>
                <th>Chức vụ</th>
            </tr>
            @endif
            @endforeach
        </table>
    </div>
</body>
</html>
