@extends('backend.layout.master')

@section('title')
Thêm mới khuyến mải
@endsection

@section('feature-title')
Thêm mới khuyến mải
@endsection

@section('feature-description')
Thêm mới khuyến mải. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('content')
<form method="post" action="{{ route('backend.khuyenmai.store') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="sp_ma">Sản phẩm khuyến mải</label>
        <select name="sp_ma" class="form-control">
            @foreach($danhsachsanpham as $sp)
                @if(old('sp_ma') == $sp->sp_ma)
                <option value="{{ $sp->sp_ma }}" selected>{{ $sp->sp_ma }}</option>
                @else
                <option value="{{ $sp->sp_ma }}">{{ $sp->sp_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="kmsp_noidung">Nọi dung khuyến mải</label>
        <input type="text" class="form-control" id="kmsp_noidung" name="kmsp_noidung" value="{{ old('kmsp_noidung') }}">
    </div>
    <div class="form-group">
        <label for="kmsp_giatri">Giá trị khuyến mải</label>
        <input type="text" class="form-control" id="kmsp_giatri" name="kmsp_giatri" value="{{ old('kmsp_giatri') }}">
    </div>
    <div class="form-group">
        <label for="kmsp_ngaybatdau">Ngày bắt đầu</label>
        <input type="date" class="form-control" id="kmsp_ngaybatdau" name="kmsp_ngaybatdau" value="{{ old('kmsp_ngaybatdau') }}">
    </div>
    <div class="form-group">
        <label for="kmsp_ngayketthuc">Ngày kết thúc</label>
        <input type="date" class="form-control" id="kmsp_ngayketthuc" name="kmsp_ngayketthuc" value="{{ old('kmsp_ngayketthuc') }}">
    </div>
    <label for="kmsp_trangthai">Trạng thái</label>
    <select name="kmsp_trangthai" class="form-control">
        <option value="1" {{ old('kmsp_trangthai') == 1 ? "selected" : "" }}>khả dụng</option>
        <option value="2" {{ old('kmsp_trangthai') == 2 ? "selected" : "" }}>Khóa</option>
    </select>
    <div class="form-group">
        <label for="nv_nguoilap">Người lập khuyến mải</label>
        <select name="nv_nguoilap" class="form-control">
            @foreach($danhsachnhanvien as $nv)
                @if(old('nv_nguoilap') == $nv->nv_nguoilap)
                <option value="{{ $nv->nv_ma }}" selected>{{ $nv->nv_ten}}</option>
                @else
                <option value="{{ $nv->nv_ma}}">{{ $nv->nv_ten}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="kmsp_ngaylap">Ngày lập</label>
        <input type="date" class="form-control" id="kmsp_ngaylap" name="kmsp_ngaylap" value="{{ old('kmsp_ngaylap') }}">
    </div>
    <button class="btn btn-primary">Lưu</button>
</form>
@endsection
