@extends('backend.layout.master')

@section('title')
Sửa loai san pham
@endsection

@section('feature-title')
Sửa Loai San pham
@endsection

@section('feature-description')
Sửa. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('content')
<form method="post" action="{{ route('backend.loaisanpham.update', ['id' => $danhsachloaisanpham->lsp_ma])}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
    <div class="form-group">
        <label for="lsp_ten">Tên Loại Sản Phẩm</label>
        <input type="text" class="form-control" id="lsp_ten" name="lsp_ten" value="{{ old('lsp_ten',$danhsachloaisanpham->lsp_ten) }}">
        <label for="lsp_capNhat">Ngày Cập Nhật</label>
        <input type="text" class="form-control" id="lsp_capNhat" name="lsp_capNhat" value="{{ old('lsp_capNhat',$danhsachloaisanpham->lsp_capNhat) }}">
    </div>
    
    <button class="btn btn-primary">Lưu</button>
</form>
@endsection
