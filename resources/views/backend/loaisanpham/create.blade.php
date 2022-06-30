@extends('backend.layout.master')

@section('title')
Thêm mới loai san pham
@endsection

@section('feature-title')
Thêm mới loai San pham
@endsection

@section('feature-description')
Thêm mới Loai san pham. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('content')
<form method="post" action="{{ route('backend.loaisanpham.store') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="lsp_ten">Tên Loại Sản Phẩm</label>
        <input type="text" class="form-control" id="lsp_ten" name="lsp_ten" value="{{ old('lsp_ten') }}">
        <label for="lsp_capNhat">Ngày Cập Nhật</label>
        <input type="date" class="form-control" id="lsp_capNhat" name="lsp_capNhat" value="{{ old('lsp_capNhat') }}">
    </div>
    
    <button class="btn btn-primary">Lưu</button>
</form>
@endsection
