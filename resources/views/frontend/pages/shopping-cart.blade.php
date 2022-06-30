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
<ngcart-cart template-url="{{ asset('vendor/ngCart/template/ngCart/cart.html') }}"></ngcart-cart>
<div class="thanhtoan">
<div class="container" ng-controller="orderController">
    <form name="orderForm" ng-submit="submitOrderForm()" novalidate>
        <button type="submit" class="btthanhtoan" ng-disabled="orderForm.$invalid && ngCart.getTotalItems() === 0">
            Thanh toán
        </button>
    </form>
</div>
</div>
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
<script>
        // Khai báo controller `orderController`
        app.controller('orderController', function($scope, $http, ngCart) {
            $scope.ngCart = ngCart;

            // hàm submit form sau khi đã kiểm tra các ràng buộc (validate)
            $scope.submitOrderForm = function() {
                debugger;
                // kiểm tra các ràng buộc là hợp lệ, gởi AJAX đến action
                var date = new Date();
                if ($scope.orderForm.$valid) {
                    var dataInputOrderForm_DatHang = {
                        "token": date,
                    };

                    var dataCart = ngCart.getCart();

                    var dataInputOrderForm = {
                        "donhang": dataInputOrderForm_DatHang,
                        "giohang": dataCart,
                        "_token": "{{ csrf_token() }}",
                    };

                    // sử dụng service $http của AngularJS để gởi request POST đến route `frontend.order`
                    $http({
                        url: "{{ route('frontend.order') }}",
                        method: "POST",
                        data: JSON.stringify(dataInputOrderForm)
                    }).then(function successCallback(response) {
                        // Clear giỏ hàng ngCart
                        $scope.ngCart.empty();

                        // Gởi mail thành công, thông báo cho khách hàng biết
                        swal('Xác nhận đơn hàng!', 'Quý khách vui lòng xác nhận địa chỉ nhân hàng!', 'success');

                        // Chuyển sang trang Hoàn tất đặt hàng
                        if (response.data.redirectUrl) {
                            location.href = response.data.redirectUrl;
                        }
                    }, function errorCallback(response) {
                        // Gởi mail không thành công, thông báo lỗi cho khách hàng biết
                        swal('Có lỗi trong quá trình thực hiện Đơn hàng!', 'Vui lòng thử lại sau vài phút.', 'error');
                        console.log(response);
                    });
                }
            };
        });
    </script>

@endsection
