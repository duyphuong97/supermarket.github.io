<table style="width: 100%; border-spacing: 0px">
        <tr>
            <td style="border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black; width: 153px; padding: 5px;">
                <img src="http://marketonline.vn/images/logo-marketonline.png" style="width: 153px; height: 153px;" />
            </td>
            <td style="border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black; text-align: center; vertical-align: middle; padding: 5px;" colspan="3">
                <h1 style="color: red;">Marketonline</h1>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black; padding: 5px;">
                Thông tin đơn hàng [{{ $data['donhang']['dh_ma'] }}]
            </td>
        </tr>
        <tr>
            <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Tài khoản
                khách hàng:</th>
            <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{ $data['khachhang']['kh_hoTen'] }}</td>

        </tr>
        <tr>
            <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Email
                khách hàng:</th>
            <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{ $data['khachhang']['kh_email'] }}</td>
        </tr>
        <tr>

            <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Địa chỉ người nhận:</th>
            <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{ $data['donhang']['dh_diachi'] }}</td>
        </tr>
        <tr>
            <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Số điện thoại
                khách hàng:</th>
            <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{ $data['khachhang']['kh_dienThoai'] }}</td>
        </tr>
        <tr>
            <td colspan="4">
                <ul>
                    {{--  @foreach($chitietdonhang as $ctdh)
                    <li>{{ $ctdh->sanpham->sp_ten }}: {{ $ctdh->ctdh_soluong }} x {{ $ctdh->ctdh_dongia }}</li>
                    @endforeach  --}}
                </ul>
            </td>
        </tr>
    </table>
