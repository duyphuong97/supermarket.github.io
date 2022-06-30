@extends('backend.layout.master')

@section('title')
Thêm mới nhân viên
@endsection

@section('feature-title')
Thêm mới nhân viên
@endsection

@section('feature-description')
Thêm mới nhân viên. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('content')
<form method="post" action="{{ route('backend.nhanvien.store') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="q_ma">Chức vụ</label>
        <select name="q_ma" class="form-control">
            @foreach($danhsachquyen as $quyen)
                @if(old('q_ma') == $quyen->q_ma)
                <option value="{{ $quyen->q_ma }}" selected>{{ $quyen->q_ten }}</option>
                @else
                <option value="{{ $quyen->q_ma }}">{{ $quyen->q_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="nv_hoTen">Họ tên nhân viên</label>
        <input type="text" class="form-control" id="nv_ten" name="nv_ten" value="{{ old('nv_ten') }}">
    </div>
    <label for="nv_gioiTinh">Giới Tính</label>
    <select name="nv_gioiTinh" class="form-control">
        <option value="Nam" {{ old('nv_gioiTinh') == 'Nam' ? "selected" : "" }}>Nam</option>
        <option value="Nữ" {{ old('nv_gioiTinh') == 'Nữ' ? "selected" : "" }}>Nữ</option>
        <option value="Khác" {{ old('nv_gioiTinh') == 'khác' ? "selected" : "" }}>Khác</option>
    </select>
    <div class="form-group">
        <label for="nv_email">Email</label>
        <input type="text" class="form-control" id="nv_email" name="nv_email" value="{{ old('nv_email') }}">
    </div>
    <div class="form-group">
        <label for="nv_ngaySinh">Ngày sinh</label>
        <input type="date" class="form-control" id="nv_ngaySinh" name="nv_ngaySinh" value="{{ old('nv_ngaySinh') }}">
    </div>
    <div class="form-group">
        <label for="nv_diaChi">Địa chỉ</label>
        <input type="text" class="form-control" id="nv_diaChi" name="nv_diaChi" value="{{ old('nv_diaChi') }}">
    </div>
    <div class="form-group">
        <label for="nv_dienThoai">Điện thoại</label>
        <input type="number" class="form-control" id="nv_dienThoai" name="nv_dienThoai" value="{{ old('nv_dienThoai') }}" data-mask-datetime>
    </div>
    <label for="nv_trangThai">Trạng thái</label>
    <select name="nv_trangThai" class="form-control">
        <option value="1" {{ old('nv_trangThai') == 1 ? "selected" : "" }}>khả dụng</option>
        <option value="2" {{ old('nv_trangThai') == 2 ? "selected" : "" }}>Khóa</option>
    </select>
    <button class="btn btn-primary">Lưu</button>
</form>
@endsection
