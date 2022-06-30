<!DOCTYPE html>
<html>
 <head>
  <title>Ajax Dynamic Dependent Dropdown in Laravel</title>
  <script src="{{ asset('themes/cozastore/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Ajax Dynamic Dependent Dropdown in Laravel</h3><br />
   <div class="form-group">
    <select name="tt_ma" id="tt_ma" class="form-control input-lg dynamic" data-dependent="qh_ma">
     <option value="">Tỉnh thành phố</option>
     @foreach($danhsachvanchuyen as $vc)
     <option value="{{ $vc->tt_ma}}">{{ $vc->tinhthanh->tt_ten }}</option>
     @endforeach
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="qh_ma" id="qh_ma" class="form-control input-lg dynamic" data-dependent="px_ma" data-ten= quanhuyen->qh_ten >
     <option value="">Quận huyện</option>
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="px_ma" id="px_ma" class="form-control input-lg dynamic" data-dependent="vc_chiphi" data-ten="phuongxa->px_ten">
     <option value="">Phường Xã</option>
    </select>
   </div>

   <div class="form-group">
    <select name="vc_chiphi" id="vc_chiphi" class="form-control input-lg ">
     <option value="">phi vận chuyển</option>
    </select>
   </div>
   {{ csrf_field() }}
   <br />
   <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var ten = $(this).data('ten');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('dynamicdependent.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#tt_ma').change(function(){
  $('#qh_ma').val('');
  $('#px_ma').val('');
  $('#vc_chiphi').val('');
 });

 $('#qh_ma').change(function(){
  $('#px_ma').val('');
  $('#vc_chiphi').val('');
 });

 $('#px_ma').change(function(){
    $('#vc_chiphi').val('');
   });


});
</script>
