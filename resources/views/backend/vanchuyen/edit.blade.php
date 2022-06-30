@extends('backend.layout.master')

@section('title')
cập nhật giá cước vận chuyển
@endsection

@section('feature-title')
cập nhật giá cước vận chuyển
@endsection

@section('feature-description')
cập nhật giá cước vận chuyển. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('content')
<form method="post" action="{{ route('backend.vanchuyen.update', ['id' => $vc->vc_ma]) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />

    <div class="form-group">
        <label for="tt_ma">Tỉnh thành</label>
        <input type="text" class="form-control" id="tt_ma" name="tt_ma" value="{{ old('tt_ma', $vc->tinhthanh->tt_ten) }}" readonly>
    </div>

    <div class="form-group">
        <label for="qh_ma">Quận huyện</label>
        <input type="text" class="form-control" id="qh_ma" name="qh_ma" value="{{ old('qh_ma', $vc->quanhuyen->qh_ten) }}" readonly>
    </div>

    <div class="form-group">
        <label for="px_ma">Phường xã</label>
        <input type="text" class="form-control" id="px_ma" name="px_ma" value="{{ old('px_ma', $vc->phuongxa->px_ten) }}" readonly>
    </div>

    <div class="form-group">
        <label for="vc_chiphi">Giá cước vận chuyển</label>
        <input type="text" class="form-control" id="vc_chiphi" name="vc_chiphi" value="{{ old('vc_chiphi', $vc->vc_chiphi) }}">
    </div>
    <div class="form-group">
        <label for="vc_thoigian">Thời gian vận chuyển</label>
        <input type="text" class="form-control" id="vc_thoigian" name="vc_thoigian" value="{{ old('vc_thoigian', $vc->vc_thoigian) }}">
    </div>
    <button class="btn btn-primary">Lưu</button>
</form>
@endsection
