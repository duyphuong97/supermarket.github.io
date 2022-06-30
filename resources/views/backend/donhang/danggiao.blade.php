
@extends('backend.layout.master')

@section('title')
Danh sách đơn hàng
@endsection

@section('feature-title')
Danh sách đơn hàng
@endsection

@section('feature-description')

@endsection

@section('custom-css')
<style>
.sanpham-thumbnail {
    width: 150px;
    height: 150px;
}
</style>
@endsection

@section('content')
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th >STT</th>
            <th>Mã đơn hàng</th>
            <th>Tên Khách hàng</th>
            <th>Giới tính</th>
            <th>Điện Thoại Khách hàng</th>
            <th>Thời gian đặt hàng</th>
            <th>Địa chỉ nhận hàng</th>
            <th>Tiến hành xữ lý đơn hàng</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = 1;
        ?>
        @foreach($donhang as $dh)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $dh->dh_ma}}</td>
            <td>{{ $dh->khachhang->kh_hoTen}}</td>
            <?php if(($dh->khachhang->kh_gioiTinh)==0){
                $gt = "Nữ";
            }elseif(($dh->khachhang->kh_gioiTinh)==1){
                $gt= "Nam";
            }else{
                $gt = "Khác";
            }
            ?>
            <td>{{ $gt}}</td>
            <td>{{ $dh->khachhang->kh_dienThoai}}</td>
            <td>{{ $dh->dh_thoigiandathang}}</td>
            <td>{{ $dh->vanchuyen->tinhthanh->tt_ten}}-{{ $dh->vanchuyen->quanhuyen->qh_ten }}-{{ $dh->vanchuyen->phuongxa->px_ten }}-{{ $dh->dh_diachi }}</td>
            <td> <a href="{{ route('backend.donhang.xulydonhang', ['id' => $dh->dh_ma]) }}" class="btn btn-success">Xữ lý đơn hàng</a> </td>
        </tr>
        <?php
        $stt++;
        ?>
        @endforeach
    </tbody>
</table>
@endsection
