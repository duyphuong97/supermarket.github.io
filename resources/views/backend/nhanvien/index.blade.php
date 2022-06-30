
@extends('backend.layout.master')

@section('title')
Danh sách Nhân viên
@endsection

@section('feature-title')
Danh sách Nhân viên
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
<a href="{{ route('backend.nhanvien.create') }}" class="btn btn-dark">Thêm mới nhân viên</a>
<a href="{{ route('backend.nhanvien.print') }}" class="btn btn-dark">In danh sách nhân viên</a>
<a href="{{ route('backend.nhanvien.excel') }}" class="btn btn-dark">Xuất file Excel danh sách nhân viên</a>
<a href="{{ route('backend.nhanvien.pdf') }}" class="btn btn-dark">Xuất file PDF danh sách nhân viên</a>
<table class="table table-striped table-bordered">
    <thead>
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
            <th>Sửa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = 1;
        ?>
        @foreach($danhsachnhanvien as $nv)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $nv->nv_ma }}</td>
            <td>{{ $nv->nv_ten }}</td>
            <td>{{ $nv->nv_ngaySinh}}</td>
            <td>{{ $nv->nv_gioiTinh }}</td>
            <td>{{ $nv->nv_email}}</td>
            <td>{{ $nv->nv_trangThai}}</td>
            <td>{{ $nv->nv_diaChi }}</td>
            <td>{{ $nv->nv_dienThoai }}</td>
            <td>{{ $nv->danhsachquyen->q_ten}}</td>
            <td>
                    <a href="{{ route('backend.nhanvien.edit', ['id' => $nv->nv_ma]) }}" class="btn btn-success">Sửa</a>
                    <form class="d-inline" method="post" action="{{ route('backend.nhanvien.destroy', ['id' => $nv->nv_ma]) }}">
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
