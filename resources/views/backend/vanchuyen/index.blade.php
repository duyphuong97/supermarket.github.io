
@extends('backend.layout.master')

@section('title')
Danh sách vận chuyển
@endsection

@section('feature-title')
Danh sách vận chuyển
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
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<a href="{{ route('backend.vanchuyen.create') }}" class="btn btn-dark">Thêm mới đơn giá vận chuyển</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th >STT</th>
            <th>Mã nhân viên</th>
            <th>tỉnh thành phố</th>
            <th>quận huyện</th>
            <th>phường xã </th>
            <th>giá cước vận chuyển</th>
            <th>thời gian vận chuyển</th>
            <th>Sửa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = 1;
        ?>
        @foreach($danhsachvanchuyen as $vc)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $vc->vc_ma }}</td>
            <td>{{ $vc->tinhthanh->tt_ten }}</td>
            <td>{{ $vc->quanhuyen->qh_ten}}</td>
            <td>{{ $vc->phuongxa->px_ten }}</td>
            <td>{{ $vc->vc_chiphi}}</td>
            <td>{{ $vc->vc_thoigian}}</td>
            <td>
                    <a href="{{ route('backend.vanchuyen.edit', ['id' => $vc->vc_ma]) }}" class="btn btn-success">Sửa</a>
                    <form class="d-inline" method="post" action="{{ route('backend.vanchuyen.destroy', ['id' => $vc->vc_ma]) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button class="btn btn-danger">Xóa</button>
                    </form>
            </td>
        </tr>
        <?php
        $stt++;
        ?>
        @endforeach
    </tbody>
</table>
@endsection
