@extends('backend.layout.master')

@section('title')
Cập nhật nhân viên
@endsection

@section('feature-title')
Cập nhật nhân viên
@endsection

@section('feature-description')
Cập nhật nhân viên. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('content')
<form method="post" action="{{ route('backend.nhanvien.update', ['id' => $nv->nv_ma])}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
    <div class="form-group">
        <label for="q_ma">Chức vụ</label>
        <select name="q_ma" class="form-control">
            @foreach($danhsachquyen as $quyen)
                @if(old('q_ma',$nv->q_ma) == $quyen->q_ma)
                <option value="{{ $quyen->q_ma }}" selected>{{ $quyen->q_ten }}</option>
                @else
                <option value="{{ $quyen->q_ma }}">{{ $quyen->q_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="nv_ten">Họ tên nhân viên</label>
        <input type="text" class="form-control" id="nv_ten" name="nv_ten" value="{{ old('nv_ten',$nv->nv_ten) }}">
    </div>
    <label for="nv_gioiTinh">Giới tính</label>
    <input type="text" class="form-control" id="nv_gioiTinh" name="nv_gioiTinh" value="{{ old('nv_gioiTinh',$nv->nv_gioiTinh) }}">
    <div class="form-group">
        <label for="nv_ngaySinh">Ngày sinh</label>
        <input type="text" class="form-control" id="nv_ngaySinh" name="nv_ngaySinh" value="{{ old('nv_ngaySinh',$nv->nv_ngaySinh) }}">
    </div>
    <div class="form-group">
        <label for="nv_email">Email</label>
        <input type="text" class="form-control" id="nv_email" name="nv_email" value="{{ old('nv_email',$nv->nv_email) }}">
    </div>
    <div class="form-group">
        <label for="nv_diaChi">Địa chỉ</label>
        <input type="text" class="form-control" id="nv_diaChi" name="nv_diaChi" value="{{ old('nv_diaChi',$nv->nv_diaChi) }}">
    </div>
    <div class="form-group">
        <label for="nv_dienThoai">Điện thoại</label>
        <input type="text" class="form-control" id="nv_dienThoai" name="nv_dienThoai" value="{{ old('nv_dienThoai',$nv->nv_dienThoai) }}">
    </div>
    <label for="nv_trangThai">Trạng thái</label>
    <select name="nv_trangThai" class="form-control">
        <option value="1" {{ old('nv_trangThai',$nv->nv_trangThai) == 1 ? "selected" : "" }}>Khóa</option>
        <option value="2" {{ old('nv_trangThai',$nv->nv_trangThai) == 2 ? "selected" : "" }}>Khả dụng</option>
    </select>
    <button class="btn btn-primary">Lưu</button>
</form>
@endsection
