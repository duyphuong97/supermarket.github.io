<header class="header-v4">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
            <div class="wrap-menu-desktop">
                    <!-- Logo desktop -->
                    <div class="logo1">
                        <a href="" class="logo">
                            <img class="iconlogo" src="{{ asset('themes/cozastore/images/icons/ICONLOGO.PNG') }}" alt="IMG-LOGO">
                        </a>
                    </div>
                <nav class="limiter-menu-desktop container">
                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="{{ route('frontend.home') }}">Home</a>
                            </li>
                            <li class="{{ Request::is('lien-he') ? 'active-menu' : '' }}">
                                <a href="{{ route('frontend.contact') }}">Contact</a>
                            </li>
                        </ul>
                        <div class="form-group col-md-3 ">
                            <form action="{{ route('frontend.search') }}" method="GET" id="searchform" role="search">
                                    <input class="search" type="search" placeholder="bạn muốn tìm gì" name="sp_ten" id="sp_ten" autocomplete="off" />
                                    <button class="btntopsearch" type="submit">
                                            <i class="icondmx-topsearch">
                                            </i>
                                    </button>
                            </form>
                            {{--  <div class="autocomplete" id="sp_tenList" style="width: 100%; height: 500px"></div>  --}}
                            <ul id="sp_tenList"></ul>
                        </div>
                    </div>
                    <div class="flex-w flex-c-m m-tb-10">
                            <div class="flex-c-m cl15 size-126 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                                <i class="icon-filter cl15 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                                <i class="icon-close-filter cl15 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                                Filter
                            </div>
                        </div>
                    <!-- Icon header -->
                    <ngcart-summary class="js-show-cart" template-url="{{ asset('vendor/ngCart/template/ngCart/summary.html') }}"></ngcart-summary>
                    </a>
                </nav>
                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10">
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sort By
                            </div>
                            <ul>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Default
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Popularity
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Average rating
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        Newness
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Price: Low to High
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Price: High to Low
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-col2 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Price
                            </div>
                            <ul>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        All
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $0.00 - $50.00
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $50.00 - $100.00
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $100.00 - $150.00
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $150.00 - $200.00
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $200.00+
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-col3 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Color
                            </div>
                            <ul>
                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #222;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Black
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        Blue
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Grey
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Green
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Red
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
                                        <i class="zmdi zmdi-circle-o"></i>
                                    </span>
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        White
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-col4 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Tags
                            </div>
                            <div class="flex-w p-t-4 m-r--5">
                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Fashion
                                </a>
                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Lifestyle
                                </a>
                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Denim
                                </a>
                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Streetstyle
                                </a>
                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Crafts
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.html"><img src="{{ asset('themes/cozastore/images/icons/logo.jpg') }}" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Help & FAQs
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        My Account
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        EN
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        USD
                    </a>
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="index.html">Home</a>
                <ul class="sub-menu-m">
                    <li><a href="index.html">Homepage 1</a></li>
                    <li><a href="home-02.html">Homepage 2</a></li>
                    <li><a href="home-03.html">Homepage 3</a></li>
                </ul>
                <span class="arrow-main-menu-m">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
            </li>

            <li>
                <a href="#">Shop</a>
            </li>

            <li>
                <a href="#" class="label1 rs1" data-label1="hot">Features</a>
            </li>

            <li>
                <a href="#">Blog</a>
            </li>

            <li>
                <a href="#">About</a>
            </li>

            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>


    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="{{ asset('themes/cozastore/images/icons/icon-close2.png') }}" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
@section('autocomplete')
<script>
        $(document).ready(function(){
            $('#sp_ten').keyup(function(){
                var query = $(this).val();
                if(query != ' '){
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('frontend.autocomplete') }}",
                        method:"get",
                        data:{query:query, _token:_token},
                        success:function(data){
                            $('#sp_tenList').fadeIn();
                            $('#sp_tenList').html(data);
                        }
                    });
                }
            });
            $(document).on('click', 'li', function(){
                $('#sp_ten').val($(this).text());
                $('#sp_tenList').fadeOut();
            });
        });
        </script>
@endsection