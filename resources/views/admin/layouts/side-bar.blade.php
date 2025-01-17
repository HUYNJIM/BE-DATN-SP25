<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="index.html" class="logo-dark">
            <img src="{{ asset('admin/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
            <img src="{{ asset('admin/images/logo-dark.png') }}" class="logo-lg" alt="logo dark">
        </a>

        <a href="index.html" class="logo-light">
            <img src="{{ asset('admin/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
            <img src="{{ asset('admin/images/logo-light.png') }}" class="logo-lg" alt="logo light">
        </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <iconify-icon icon="solar:hamburger-menu-broken" class="button-sm-hover-icon"></iconify-icon>
    </button>

    <div class="scrollbar" data-simplebar>

        <ul class="navbar-nav" id="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:home-2-broken"></iconify-icon>
                    </span>
                    <span class="nav-text"> Thống Kê </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <span class="nav-icon">
                        <iconify-icon icon="carbon:categories"></iconify-icon>
                    </span>
                    <span class="nav-text"> Danh Mục Sản Phẩm </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('products.list')}}">
                    <span class="nav-icon" style="margin-left: -4px;">
                        <iconify-icon icon="bxl:magento" width="24" height="24"></iconify-icon></iconify-icon>
                    </span>
                    <span class="nav-text" style="margin-top: 7px;"> Sản PhẩmPhẩm </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('order.list')}}">
                    <span class="nav-icon" style="margin-left: -4px;">
                        <iconify-icon icon="prime:book" width="24" height="24"></iconify-icon>
                    </span>
                    <span class="nav-text" style="margin-top: 7px;"> Quản Lý Đơn HàngHàng </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('brands.list')}}">
                    <span class="nav-icon">
                        <iconify-icon icon="carbon:categories"></iconify-icon>
                    </span>
                    <span class="nav-text"> Thương Hiệu </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('coupons.list')}}">
                    <span class="nav-icon">
                        <iconify-icon icon="carbon:categories"></iconify-icon>
                    </span>
                    <span class="nav-text"> Mã Giảm Giá </span>
                </a>
            </li>
        </ul>
    </div>
</div>