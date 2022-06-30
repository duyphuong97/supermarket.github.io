{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
Giỏ hàng của bạn
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.master` --}}
@section('main-content')

<!-- Hiển thị giỏ hàng -->
<div class="thanhtoan1">
<div class="container" ng-controller="orderController">
    <form name="orderForm" ng-submit="submitOrderForm()"  method="POST" action="{{ route('frontend.order') }}" novalidate>
        {{ csrf_field() }}
        <div class="row">
            <div style="width: 714px;margin-left: 235px;">
                <div class="info">
                    <label style="margin-left: 238px; font-size: 30px">Thông tin khách hàng</label>
                    <div class="left">
                        <input type="text" class="info_name" id="kh_hoTen" name="kh_hoTen" ng-model="kh_hoTen" ng-minlength="6" ng-maxlength="100" ng-required=true placeholder="Họ và tên">
                    </div>
                    <div class="right ">
                        <select name="kh_gioiTinh" id="kh_gioiTinh" class="info_gt" ng-model="kh_gioiTinh" ng-required=true>
                            <option value="" selected="" disabled="">Gới Tính</option>
                            <option value="0">Nữ</option>
                            <option value="1">Nam</option>
                            <option value="2">Khác</option>
                        </select>
                    </div>
                    <div class="left">
                        <input type="email" class="info_name" id="kh_email" name="kh_email" ng-model="kh_email" ng-pattern="/^.+@gmail.com$/" ng-required=true placeholder="Gmail">
                    </div>
                    <div class="left" style="margin-top: -50px;">
                        <input type="text" class="info_name" id="kh_dienThoai" name="kh_dienThoai" ng-model="kh_dienThoai" ng-minlength="10" ng-maxlength="10" ng-required=true placeholder="Số điện thoại">
                    </div>
                </div>


                <div class="info_address">
                    <label style="margin-left: 238px; font-size: 30px">địa chỉ nhận hàng</label>
                    <div class="left">
                        <label for="title" style="margin-left: 21px">Tỉnh,thành phố:</label>
                        <select name="tt_ma" id="tt_ma" class="info_name input-lg dynamic" ng-model="tt_ma" ng-required=true data-dependent="qh_ma">
                            @foreach($danhsachvanchuyen as $vc)
                            <option value="{{ $vc->tt_ma}}">{{ $vc->tinhthanh->tt_ten }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="left">
                            <label for="title"  style="margin-left: 21px">Quận huyện</label>
                            <select name="qh_ma" id="qh_ma" class="info_name input-lg dynamic" ng-model="qh_ma" data-dependent="px_ma" >
                            </select>
                        </div>
                        <div class="left">
                            <label for="title"  style="margin-left: 21px">Phường Xã</label>
                            <select name="px_ma" id="px_ma" class="info_name input-lg dynamic"  ng-model="qh_ma" data-dependent="vc_chiphi">
                            </select>
                        </div>
                        <div style="float: left;width: 49%;">
                            <label for="title"  style="margin-left: 21px">Số nhà,Tên đường</label>
                            <input type="text" class="info_name" id="dh_diachi" name="dh_diachi" ng-model="dh_diachi" ng-minlength="10" ng-maxlength="250" ng-required=true placeholder="Số nhà tên đường">
                        </div>
                        <div class="left">
                            <label for="title"  style="margin-left: 21px">Phương thức thanh toán</label>
                            <select name="thanhtoan_ma" id="thanhtoan_ma" class="info_name" ng-model="thanhtoan_ma" ng-required=true>
                            @foreach($danhsachphuongthucthanhtoan as $tt)
                                <option value="" selected disabled>chọn phương thức thanh toán</option>
                                <option value="{{ $tt->tt_ma }}">{{ $tt->tt_ten }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div style="float: left;width: 49%;">
                            <label for="title"  style="margin-left: 21px">Chi phí vận chuyển</label>
                            <select name="vc_chiphi" id="vc_chiphi" class="info_name input-lg ">
                                <option value="">phi vận chuyển</option>
                            </select>
                        </div>
                </div>



                    <div class="alert" style="color:red;" ng-show="orderForm.$invalid">
                            <ul>
                                {{-- <!-- Thông báo lỗi kh_email --> --}}
                                <li><span class="error" ng-show="orderForm.kh_email.$error.required">Vui lòng nhập email</span></li>
                                <li><span class="error" ng-show="!orderForm.kh_email.$error.required && orderForm.kh_email.$error.pattern">Chỉ chấp nhập GMAIL, vui lòng kiểm tra lại</span></li>

                                <li><span class="error" ng-show="orderForm.kh_hoTen.$error.required">Vui lòng nhập Họ tên</span></li>
                                <li><span class="error" ng-show="orderForm.kh_hoTen.$error.minlength">Họ tên phải > 6 ký tự</span></li>
                                <li><span class="error" ng-show="orderForm.kh_hoTen.$error.maxlength">Họ tên phải <= 100 ký tự</span> </li>


                                <li><span class="error" ng-show="orderForm.kh_gioiTinh.$error.required">Vui lòng chọn giới tính</span></li>


                                <li><span class="error" ng-show="orderForm.tt_ma.$error.required">Vui lòng chọn Tỉnh thành phố</span></li>

                                <li><span class="error" ng-show="orderForm.kh_dienThoai.$error.required">Vui lòng nhập số điện thoại</span></li>
                                <li><span class="error" ng-show="orderForm.kh_dienThoai.$error.minlength">số điện thoại phải đủ 10 số</span></li>
                                <li><span class="error" ng-show="orderForm.kh_dienThoai.$error.maxlength">số điện thoại không được vượt quá 10 số</span> </li>

                            <ul>
                                <li><span class="error" ng-show="orderForm.dh_diachi.$error.required">Vui lòng nhập Địa chỉ</span></li>
                                <li><span class="error" ng-show="orderForm.dh_diachi.$error.minlength">vui lòng nhập đầy đủ số nhà tên đường</span></li>
                                <li><span class="error" ng-show="orderForm.dh_diachi.$error.maxlength">vui lòng nhập dúng số nhà tên đường</span> </li>

                                <li><span class="error" ng-show="orderForm.vc_ma.$error.required">Vui lòng chọn Hình thức vận chuyển</span></li>

                                <li><span class="error" ng-show="orderForm.thanhtoan_ma.$error.required">Vui lòng chọn Phương thức thanh toán</span></li>
                                </li>
                        </div>



            </div>
        </div>

        {{-- <!-- Div Thông báo validate hợp lệ
        Chỉ hiển thị khi các validate trong form `orderForm` không hợp lệ => orderForm.$valid = true
        Sử dụng tiền chỉ lệnh ng-show="orderForm.$valid"
        --> --}}
        <div class="alert alert-success" ng-show="orderForm.$valid">
            Thông tin hợp lệ, vui lòng bấm nút <b>"Đặt hàng"</b> để hoàn tất ĐƠN HÀNG<br />
            Chúng tôi sẽ gởi mail đển quý khách. Xin chân thành cám ơn Quý Khách hàng đã tin tưởng sản phẩm của chúng tôi.
            <button type="submit" class="flex-c-m bor1-5 stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer mb-4" ng-disabled="orderForm.$invalid && ngCart.getTotalItems() === 0">
                Thanh toán
            </button>
        </div>
        {{-- <!-- Nút submit form --> --}}
        {{-- <button class="btn btn-primary">Đặt hàng</button> --}}
    </form>
</div>
</div>

@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')

<script>
        $(document).ready(function(){

            $('.dynamic').change(function(){
            if($(this).val() != '')
            {
            var select = $(this).attr("id");
            var value = $(this).val();
            var dependent = $(this).data('dependent');
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

<script>
        // Khai báo controller `orderController`
        app.controller('orderController', function($scope,ngCart) {
            $scope.ngCart = ngCart;
                debugger;
                // kiểm tra các ràng buộc là hợp lệ, gởi AJAX đến action
                    function successCallback(response) {
                        // Clear giỏ hàng ngCart
                        $scope.ngCart.empty();

                        // Gởi mail thành công, thông báo cho khách hàng biết
                        swal('Đơn hàng hoàn tất!', 'Xin cám ơn Quý khách!', 'success');

                        // Chuyển sang trang Hoàn tất đặt hàng
                        if (response.data.redirectUrl) {
                            location.href = response.data.redirectUrl;
                        }
                    }
                    function errorCallback(response) {
                        // Gởi mail không thành công, thông báo lỗi cho khách hàng biết
                        swal('Có lỗi trong quá trình thực hiện Đơn hàng!', 'Vui lòng thử lại sau vài phút.', 'error');
                        console.log(response);
                    };
        });
</script>

@endsection
