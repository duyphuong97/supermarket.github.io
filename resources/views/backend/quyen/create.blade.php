@extends('backend.layout.master')

@section('title')
Thêm mới quyền
@endsection

@section('feature-title')
Thêm mới quyền
@endsection

@section('feature-description')
Thêm mới quyền. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('content')
<form method="post" action="{{ route('backend.quyen.store') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="q_ten">Tên quyền</label>
        <input type="text" class="form-control" id="q_ten" name="q_ten" value="{{ old('q_ten') }}">
    </div>
    <label for="q_trangThai">Trạng thái</label>
    <select name="q_trangThai" class="form-control">
        <option value="1" {{ old('q_trangThai') == 1 ? "selected" : "" }}>khả dụng</option>
        <option value="2" {{ old('q_trangThai') == 2 ? "selected" : "" }}>Khóa</option>
    </select>
    <button class="btn btn-primary">Lưu</button>
</form>
@endsection
