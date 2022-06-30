@extends('backend.layout.master')

@section('title')
Thêm mới Sản phẩm
@endsection

@section('feature-title')
Thêm mới Sản phẩm
@endsection

@section('feature-description')
Thêm mới Sản phẩm. Vui lòng nhập thông tin và bấm Lưu.
@endsection
@section('custom-css')
<style>
    {{-- .preview-upload {
        border: 1px dashed red;
        padding: 10px;
    } --}}
    .preview-upload img {
        width: 300px;
        height: 300px;
    }
</style>
@endsection

@section('content')
<form method="post" action="{{ route('backend.sanpham.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="lsp_ma">Loại sản phẩm</label>
        <select name="lsp_ma" class="form-control">
            @foreach($loaisanpham as $loai)
                @if(old('lsp_ma') == $loai->lsp_ma)
                <option value="{{ $loai->lsp_ma }}" selected>{{ $loai->lsp_ten }}</option>
                @else
                <option value="{{ $loai->lsp_ma }}">{{ $loai->lsp_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
            <label for="msp_ma">Màu sản phẩm</label>
            <select name="msp_ma" class="form-control">
                @foreach($mausanpham as $msp)
                    @if(old('msp_ma') == $msp->msp_ma)
                    <option value="{{ $msp->msp_ma }}" selected>{{ $msp->msp_ten }}</option>
                    @else
                    <option value="{{ $msp->msp_ma }}">{{ $msp->msp_ten }}</option>
                    @endif
                @endforeach
            </select>
    </div>
    <div class="form-group">
            <label for="ncc_ma">Nhà chung cấp</label>
            <select name="ncc_ma" class="form-control">
                @foreach($nhacungcap as $ncc)
                    @if(old('ncc_ma') == $ncc->ncc_ma)
                    <option value="{{ $ncc->ncc_ma }}" selected>{{ $ncc->ncc_ten }}</option>
                    @else
                    <option value="{{ $ncc->ncc_ma }}">{{ $ncc->ncc_ten }}</option>
                    @endif
                @endforeach
            </select>
    </div>
    <div class="form-group">
        <label for="sp_ten">Tên sản phẩm</label>
        <input type="text" class="form-control" id="sp_ten" name="sp_ten" value="{{ old('sp_ten') }}">
    </div>
    <div class="form-group">
        <label for="sp_giaGoc">Giá bán</label>
        <input type="number" class="form-control" id="sp_giaBan" name="sp_giaBan" value="{{ old('sp_giaBan') }}">
    </div>
    <div class="form-group">
        <div class="file-loading">
            <label>Hình đại diện</label>
            <input id="sp_hinh" type="file" name="sp_hinh">
        </div>
        <div class="preview-upload">
            <img id='sp_hinh-upload'/>
        </div>
    </div>
    <div class="form-group">
        <label for="sp_gichu">Thông tin</label>
        <input type="text" class="form-control" id="sp_gichu" name="sp_gichu" value="{{ old('sp_gichu') }}">
    </div>
    <button class="btn btn-primary">Lưu</button>
</form>
@endsection
@section('custom-scripts')
<script>
    // Sử dụng FileReader để đọc dữ liệu tạm trước khi upload lên Server
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#sp_hinh-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    // Bắt sự kiện, ngay khi thay đổi file thì đọc lại nội dung và hiển thị lại hình ảnh mới trên khung preview-upload
    $("#sp_hinh").change(function(){
        readURL(this);
    });
</script>
@endsection
