<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                Home <span class="sr-only">(current)</span>
                </a>
                <a class="nav-link active" href="{{ route('backend.nhanvien.index') }}">
                    <font size="5">Quản Lý Nhân Sự</font>
                </a>

                <a class="nav-link active" href="{{ route('backend.quyen.index') }}">
                    <font size="5">Quản Lý Chức Vụ</font>
                </a>
                <a class="nav-link active" href="{{ route('backend.donhang.index') }}">
                    <font size="5">Quản Lý Đơn Hàng</font>
                </a>
                <a class="nav-link active" href="{{ route('backend.sanpham.index') }}">
                    <font size="5">Quản Lý Sản Phẩm</font>
                </a>
                <a class="nav-link active" href="{{ route('backend.khuyenmai.index') }}">
                    <font size="5">Quản Lý Khuyến Mãi</font>
                </a>
                <a class="nav-link active" href="{{ route('backend.vanchuyen.index') }}">
                    <font size="5">Quản Lý Vận Chuyển</font>
                </a>
                <a class="nav-link active" href="{{ route('backend.baocao.donhang') }}">
                    <font size="5">Báo Cáo Đơn Hàng</font>
                </a>
                <a class="nav-link active" href="{{ route('backend.loaisanpham.index') }}">
                    <font size="5">Quản Lý Loại Sản Phẩm</font>
                </a>
            </li>
        </ul>
    </div>
</nav>
