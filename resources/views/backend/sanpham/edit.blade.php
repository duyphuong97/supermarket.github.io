@extends('backend.layout.master')

@section('title')
Sửa Sản phẩm
@endsection

@section('feature-title')
Sửa Sản phẩm
@endsection

@section('feature-description')
Sửa Sản phẩm. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('content')
<form method="post" action="{{ route('backend.sanpham.update', ['id' => $sp->sp_ma]) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="hidden" name="_method" value="PUT" />
        <label for="lsp_ma">Loại sản phẩm</label>
        <select name="lsp_ma" class="form-control">
            @foreach($loaisanpham as $loai)
                @if(old('lsp_ma', $sp->lsp_ma) == $loai->lsp_ma)
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
                @if(old('msp_ma', $sp->msp_ma) == $msp->msp_ma)
                <option value="{{ $msp->msp_ma }}" selected>{{ $msp->msp_ten }}</option>
                @else
                <option value="{{ $msp->msp_ma }}">{{ $msp->msp_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="ncc_ma">Nhà cung cấp</label>
        <select name="ncc_ma" class="form-control">
            @foreach($nhacungcap as $ncc)
                @if(old('ncc_ma', $sp->ncc_ma) == $ncc->ncc_ma)
                <option value="{{ $ncc->ncc_ma }}" selected>{{ $ncc->ncc_ten }}</option>
                @else
                <option value="{{ $ncc->ncc_ma }}">{{ $ncc->ncc_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="sp_ten">Tên sản phẩm</label>
        <input type="text" class="form-control" id="sp_ten" name="sp_ten" value="{{ old('sp_ten', $sp->sp_ten) }}">
    </div>
    <div class="form-group">
        <label for="sp_giaGoc">Giá bán</label>
        <input type="number" class="form-control" id="sp_giaBan" name="sp_giaBan" value="{{ old('sp_giaBan', $sp->sp_giaBan) }}">
    </div>
    <div class="form-group">
        <img src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" class="sanpham-thumbnail" />
        <div class="file-loading">
            <label>Hình đại diện</label>
            <input id="sp_hinh" type="file" name="sp_hinh">
        </div>
    </div>
    <div class="form-group">
        <label for="sp_gichu">Thông tin</label>
        <input type="text" class="form-control" id="sp_gichu" name="sp_gichu" value="{{ old('sp_gichu', $sp->sp_gichu) }}">
    </div>
    <button class="btn btn-primary">Lưu</button>
</form>
@endsection
