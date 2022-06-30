
@extends('backend.layout.master')

@section('title')
Danh sách khuyến mải
@endsection

@section('feature-title')
Danh sách khuyến mải
@endsection

@section('feature-description')

@endsection

@section('custom-css')
<style>
        .edit {
            width: 140px;
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
<a href="{{ route('backend.khuyenmai.create') }}" class="btn btn-dark">Thêm mới khuến mải</a>
{{-- <a href="{{ route('backend.khuyenmai.print') }}" class="btn btn-dark">In danh sách khuến mải</a>
<a href="{{ route('backend.khuyenmai.excel') }}" class="btn btn-dark">Xuất file Excel danh sách khuến mải</a>
<a href="{{ route('backend.khuyenmai.pdf') }}" class="btn btn-dark">Xuất file PDF danh sách khuến mải</a> --}}
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th >STT</th>
            <th>Mã khuến mải</th>
            <th>Sản phẩm khuyến mải</th>
            <th>Nọi dung khuyến mải</th>
            <th>Giá trị khuyến mải</th>
            <th>Ngày bắt đầu </th>
            <th>Ngày kết thúc</th>
            <th>trạng thái khuyến mải<br><span>1-khả dụng,2-khóa</span></th>
            <th>Người lập khuyến mải</th>
            <th>ngày lập khuyến mải</th>
            <th>Sửa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = 1;
        ?>
        @foreach($danhsachkhuyenmai as $kmsp)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $kmsp->kmsp_ma }}</td>
            <td>{{ $kmsp->danhsachsanpham->sp_ten}}</td>
            <td>{{ $kmsp->kmsp_noidung }}</td>
            <td>{{ $kmsp->kmsp_giatri}}</td>
            <td>{{ $kmsp->kmsp_ngaybatdau }}</td>
            <td>{{ $kmsp->kmsp_ngayketthuc}}</td>
            <td>{{ $kmsp->kmsp_trangthai}}</td>
            <td>{{ $kmsp->danhsachnhanvien->nv_ten}}</td>
            <td>{{ $kmsp->kmsp_ngaylap }}</td>
            <td class="edit">
                    <a href="{{ route('backend.khuyenmai.edit', ['id' => $kmsp->kmsp_ma]) }}" class="btn btn-success">Sửa</a>
                    <form class="d-inline" method="post" action="{{ route('backend.khuyenmai.destroy', ['id' => $kmsp->kmsp_ma]) }}">
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
