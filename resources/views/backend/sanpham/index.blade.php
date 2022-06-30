{{-- View này sẽ kế thừa giao diện từ `backend.layouts.index` --}}
@extends('backend.layout.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `backend.layouts.index` --}}
@section('title')
Danh sách sản phẩm
@endsection

@section('feature-title')
Danh sách sản phẩm
@endsection

@section('custom-css')
<style>
.sanpham-thumbnail {
    width: 150px;
    height: 150px;
}
</style>
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `backend.layouts.index` --}}
@section('content')
{{-- <!-- Đây là div hiển thị Kết quả (thành công, thất bại) sau khi thực hiện các chức năng Thêm, Sửa, Xóa.
- Div này chỉ hiển thị khi trong Session có các key `alert-*` từ Controller trả về.
- Sử dụng các class của Bootstrap "danger", "warning", "success", "info" để hiển thị màu cho đúng với trạng thái kết quả.
--> --}}
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<a href="{{ route('backend.sanpham.create') }}" class="btn btn-dark">Thêm mới sản phẩm</a>
<a href="{{ route('backend.sanpham.print') }}" class="btn btn-dark">In danh sách sản phẩm</a>
<a href="{{ route('backend.sanpham.excel') }}" class="btn btn-dark">Xuất file excel danh sách sản phẩm</a>
<a href="{{ route('backend.sanpham.pdf') }}" class="btn btn-dark">Xuất file pdf danh sách sản phẩm</a>
<!-- Tạo table hiển thị danh sách các sản phẩm -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã</th>
            <th>Tên</th>
            <th>Giá sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Màu sản phẩn</th>
            <th>Thuộc loại</th>
            <th>Nhà cung Cấp</th>
            <th>Sửa-Xóa</th>
        </tr>
    </thead>
    <tbody>
        {{-- <!-- Sử dụng vòng lặp foreach để duyệt qua các sản phẩm
        - Biến $danhsachsanpham là biến được truyền qua từ action `index()` trong controller SanPhamController.
        --> --}}
        <?php
        $stt=1;
        ?>
        @foreach($danhsachsanpham as $sp)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $sp->sp_ma }}</td>
                <td>{{ $sp->sp_ten }}</td>
                <td>{{ $sp->sp_giaBan }}</td>
                <td><img src="{{ url('storage/photos/' .$sp->sp_hinh) }}" class="sanpham-thumbnail" /></td>
                <td>{{ $sp->mausanpham->msp_ten}}</td>
                <td>{{ $sp->loaisanpham->lsp_ten}}</td>
                <td>{{ $sp->nhacungcap->ncc_ten}}</td>
                <td>
                    <a href="{{ route('backend.sanpham.edit', ['id' => $sp->sp_ma]) }}" class="btn btn-success">Sửa</a>
                    <form class="d-inline" method="post" action="{{ route('backend.sanpham.destroy', ['id' => $sp->sp_ma]) }}">
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
