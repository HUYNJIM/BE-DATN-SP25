<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        {{-- <a href="index.html" class="logo-dark">
            <img src="{{ asset('admin/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
            <img src="{{ asset('admin/images/logo-dark.png') }}" class="logo-lg" alt="logo dark">
        </a>

        <a href="index.html" class="logo-light">
            <img src="{{ asset('admin/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
            <img src="{{ asset('admin/images/logo-light.png') }}" class="logo-lg" alt="logo light">
        </a> --}}
        <div class="col-12 text-start">
            <iconify-icon
                icon="solar:hearts-bold-duotone"
                class="fs-18 align-middle text-danger">
            </iconify-icon> 
            <a
                href="" class="fw-bold footer-text"
                target="_blank">BeePharmacy</a>
        </div>
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
<<<<<<< HEAD
                <a class="nav-link" href="{{ route('categories.list') }}">
=======
                <a class="nav-link" href="/admin/categories">
                    <span class="nav-icon">
                        <iconify-icon icon="carbon:categories"></iconify-icon>
                    </span>
                    <span class="nav-text"> Categories </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('brands.list')}}">
>>>>>>> d49d6947e4c20441425c21d46295ae881b7b66ff
                    <span class="nav-icon">
                        <iconify-icon icon="carbon:categories"></iconify-icon>
                    </span>                  
                    <span class="nav-text"> Brand </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('coupons.list')}}">
                    <span class="nav-icon">
                        <iconify-icon icon="carbon:categories"></iconify-icon>
                    </span>                  
                    <span class="nav-text"> mã giảm giảm  </span>
                </a>
            </li>
        </ul>
    </div>
</div>