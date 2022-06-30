@extends('backend.layout.master')

@section('title')
Thêm mới vận chuyển
@endsection

@section('feature-title')
Thêm mới vận chuyển
@endsection

@section('feature-description')
Thêm mới vận chuyển. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('content')
<form method="post" action="{{ route('backend.vanchuyen.store') }}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Tỉnh,thành phố:</label>
        <select id="tinhthanh" name="tinhthanh" class="form-control" >
            <option value="" selected disabled>Select</option>
            @foreach($tinhthanh as $tt)
                <option value="{{$tt->tt_ma}}"> {{ $tt->tt_ten }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
    <label for="title">Quận huyện</label>
        <select name="quanhuyen" id="quanhuyen" class="form-control"></select>
    </div>
    <div class="form-group">
        <label for="title">Phường xã:</label>
            <select name="phuongxa" id="phuongxa" class="form-control"></select>
    </div>
    <div class="form-group">
        <label for="vc_chiphi">Giá cước vận chuyển</label>
            <input type="text" class="form-control" id="vc_chiphi" name="vc_chiphi" value="{{ old('vc_chiphi') }}">
    </div>
    <div class="form-group">
        <label for="vc_thoigian">Thời gian vận chuyển</label>
            <input type="text" class="form-control" id="vc_thoigian" name="vc_thoigian" value="{{ old('vc_thoigian') }}">
    </div>

    <button class="btn btn-primary">Lưu</button>
</form>
@endsection
@section('custom-scripts')
<script type="text/javascript">
    $('#tinhthanh').change(function(){
    var tinhthanhID = $(this).val();
    if(tinhthanhID){
        $.ajax({
            type:"GET",
            url:"{{url('get-quanhuyen-list')}}?tt_ma="+tinhthanhID,
            success:function(res){
            if(res){
                $("#quanhuyen").empty();
                $("#quanhuyen").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#quanhuyen").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
                $("#quanhuyen").empty();
            }
            }
        });
    }else{
        $("#quanhuyen").empty();
        $("#phuongxa").empty();
    }
    });
    $('#quanhuyen').on('change',function(){
    var quanhuyenID = $(this).val();
    if(quanhuyenID){
        $.ajax({
            type:"GET",
            url:"{{url('get-phuongxa-list')}}?qh_ma="+quanhuyenID,
            success:function(res){
            if(res){
                $("#phuongxa").empty();
                $.each(res,function(key,value){
                    $("#phuongxa").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
                $("#phuongxa").empty();
            }
            }
        });
    }else{
        $("#phuongxa").empty();
    }

    });
</script>
@endsection
