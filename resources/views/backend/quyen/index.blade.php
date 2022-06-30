
@extends('backend.layout.master')

@section('title')
Danh sách Chức vụ
@endsection

@section('feature-title')
Danh sách Chức vụ
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
<a href="{{ route('backend.quyen.create') }}" class="btn btn-dark">Thêm mới Chức vụ</a>
<a href="{{ route('backend.quyen.print') }}" class="btn btn-dark">In danh sách Chức vụ</a>
<a href="{{ route('backend.quyen.excel') }}" class="btn btn-dark">Xuất file Excel danh sách Chức vụ</a>
<a href="{{ route('backend.quyen.pdf') }}" class="btn btn-dark">Xuất file PDF danh sách Chức vụ</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th >STT</th>
            <th>Mã Chức vụ</th>
            <th>Họ tên Chức vụ</th>
            <th>Trạng Thái <br><font size = 1>(1-kha dụng, 2-khóa)</font></th>
            <th>Sửa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = 1;
        ?>
        @foreach($danhsachquyen as $q)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $q->q_ma }}</td>
            <td>{{ $q->q_ten }}</td>
            <td>{{ $q->q_trangThai}}</td>
            <td>
                    <a href="{{ route('backend.quyen.edit', ['id' => $q->q_ma]) }}" class="btn btn-success">Sửa</a>
                    <form class="d-inline" method="post" action="{{ route('backend.quyen.destroy', ['id' => $q->q_ma]) }}">
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
