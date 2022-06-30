<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Marketonline | @yield('title')</title>
    <!-- Các custom style dành riêng cho từng view -->
    @yield('custom-css')
  </head>
  <body>
    <!-- Navbar -->
    @include('backend.layout.partials.navbar')
    <!-- End Navbar -->
    <!-- Main content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('backend.layout.partials.sidebar')
            <!-- End sidebar -->
            <!-- Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">@yield('feature-title')</h1>
                    <small>@yield('feature-description')</small>

                </div>
                @yield('content')
            </main>
            <!-- End content -->
        </div>
    </div>
    <!-- End main content -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Include AngularJS -->
    <script src="{{ asset('vendor/angularjs/angular.min.js') }}"></script>
    <!-- Include thư viện quản lý Cart - AngularJS -->
    <script src="{{ asset('vendor/ngCart/dist/ngCart.js') }}"></script>
    <script>
        // Khởi tạo ứng dụng AngularJS, sử dụng plugin ngCart
        // Do Laravel và AngularJS đều sử dụng dấu `Double bracket` để render dữ liệu
        // => để tránh bị xung đột cú pháp, ta sẽ đổi cú pháp render dữ liệu của AngularJS thành <% %>
        var app = angular.module('Marketonline', ['ngCart'],
            function($interpolateProvider) {
                $interpolateProvider.startSymbol('<%');
                $interpolateProvider.endSymbol('%>');
            });
    </script>
    <!-- Các custom script dành riêng cho từng view -->
    @yield('custom-scripts')
  </body>
</html>
