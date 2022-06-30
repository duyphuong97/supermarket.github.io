@extends('backend.layout.master')

@section('title')
Sửa quyền
@endsection

@section('feature-title')
Sửa quyền
@endsection

@section('feature-description')
Sửa. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('content')
<form method="post" action="{{ route('backend.quyen.update', ['id' => $danhsachquyen->q_ma])}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
    <div class="form-group">
        <label for="q_ten">Tên quyền</label>
        <input type="text" class="form-control" id="q_ten" name="q_ten" value="{{ old('q_ten',$danhsachquyen->q_ten) }}">
    </div>
    <label for="q_trangThai">Trạng thái</label>
    <select name="q_trangThai" class="form-control">
        <option value="1" {{ old('q_trangThai',$danhsachquyen->q_trangThai) == 1 ? "selected" : "" }}>Khóa</option>
        <option value="2" {{ old('q_trangThai',$danhsachquyen->q_trangThai) == 2 ? "selected" : "" }}>Khả dụng</option>
    </select>
    <button class="btn btn-primary">Lưu</button>
</form>
@endsection
