<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-0">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                    Tất cả
                </button>
                @foreach($loaisanpham as $lsp)
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".loai-{{ $lsp->lsp_ma }}">
                    {{ $lsp->lsp_ten }}
                </button>
                @endforeach
            </div>
        </div>
        <div class="row isotope-grid">
            @foreach($data as $index=>$sp)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item loai-{{ $sp->lsp_ma }}">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img class="imgsanpham" src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" alt="IMG-PRODUCT">
                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg1 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-sp-ma="{{ $sp->sp_ma }}">
                            Xem nhanh
                        </a>
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                <strong>{{ $sp->sp_ten }}</strong>
                            </a>
                            <ul>
                            <?php $count = 404?>
                            @foreach ($khuyenmai as $km)
                                    @if ($sp->sp_ma == $km->sp_ma)
                                        <?php $count = 0;
                                        break;
                                        ?>
                                    @else
                                        <?php $count = $count+1;?>
                                    @endif
                            @endforeach
                            @if ($count==0)
                                @if (strlen($km->kmsp_giatri)<=3)
                                    <?php $gitrikhuyenmai = (int)($km->kmsp_giatri);
                                            $giaban = (int)($sp->sp_giaBan);
                                            $tong = $giaban*($gitrikhuyenmai/100);?>
                                            <li class="stext-105 cl3 ">
                                                <strong>{{ $tong }}<sup><u>đ</u></sup></strong>
                                                <strong class="stext-119">{{ $sp->sp_giaBan }}<sup><u>đ</u></sup></strong>
                                            </li>
                                    <li class="stext-118"><strong>-{{ $km->kmsp_giatri }}</strong></li>
                                @else
                                    <li class="stext-105 cl3 ">
                                        <strong>{{ $sp->sp_giaBan }}<sup><u>đ</u></sup></strong>
                                    </li>
                                    <br><strong class="stext-106">{{ $km->kmsp_giatri }}</strong>
                                @endif
                            @else
                                <li class="stext-105 cl3 ">
                                    <strong>{{ $sp->sp_giaBan }}<sup><u>đ</u></sup></strong>
                                </li>
                            @endif
                            </ul>
                        </div>
                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="{{ asset('themes/cozastore/images/icons/icon-heart-01.png') }}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('themes/cozastore/images/icons/icon-heart-02.png') }}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Modal quick view -->
                @include('frontend.widgets.product-quick-view', ['sp' => $sp, 'hinhsanphamlienquan' => $hinhsanphamlienquan])
            </div>
            @endforeach
        </div>
        <!-- Load more -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Load More
            </a>
        </div>
    </div>
</div>

