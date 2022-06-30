
@extends('backend.layout.master')

@section('title')
Danh sách loại sản phẩm tìm kiếm
@endsection

@section('feature-title')
Danh sách loại sản phẩm

@endsection

@section('feature-description')

@endsection


@section('content')
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
                        <div class="form-group col-md-3 ">
                            <form action="{{ route('backend.search') }}" method="GET" id="searchform" role="search">
                                    <input class="search" type="search" placeholder="Bạn muốn tìm gì" name="lsp_ten" id="lsp_ten" autocomplete="off" />
                                    <button class="btntopsearch" type="submit">
                                            <i class="icondmx-topsearch">
                                            </i>
                                    </button>
                            </form>
                            <!-- {{--  <div class="autocomplete" id="lsp_tenList" style="width: 100%; height: 500px"></div>  --}}
                            <ul id="lsp_tenList"></ul> -->
                        </div>
<a href="{{ route('backend.loaisanpham.create') }}" class="btn btn-dark">Thêm mới loại sản phẩm</a>
<a href="{{ route('backend.loaisanpham.print') }}" class="btn btn-dark">In danh sách loại sản phẩm</a>
<a href="{{ route('backend.loaisanpham.excel') }}" class="btn btn-dark">Xuất file Excel danh sách loại sản phẩm</a>
<a href="{{ route('backend.loaisanpham.pdf') }}" class="btn btn-dark">Xuất file PDF danh sách loại sản phấm</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th >STT</th>
            <th>Mã loại sản phẩm</th>
            <th>Tên loại sản phẩm</th>
            <th>Ngày Cập Nhật</th>
            <th>Sửa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = 1;
        ?>
        @foreach($danhsachloaisanpham as $q)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $q->lsp_ma }}</td>
            <td>{{ $q->lsp_ten }}</td>
            <td>{{ $q->lsp_capNhat}}</td>
            <td>
                    <a href="{{ route('backend.loaisanpham.edit', ['id' => $q->lsp_ma]) }}" class="btn btn-success">Sửa</a>
                    <form class="d-inline" method="post" action="{{ route('backend.loaisanpham.destroy', ['id' => $q->lsp_ma]) }}">
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
