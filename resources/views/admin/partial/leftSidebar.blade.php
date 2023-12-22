<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('admin/admin/assets/images/logo.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('admin/admin/assets/images/logo_sm.png') }}" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('admin/admin/assets/images/logo-dark.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('admin/admin/assets/images/logo_sm_dark.png') }}" alt="" height="16">
        </span>
    </a>
    <div class="h-100" id="leftside-menu-container" data-simplebar="">
        <!--- Sidemenu -->
        <ul class="side-nav">
            <li class="side-nav-title side-nav-item">Menus</li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProduct" aria-expanded="false"
                    aria-controls="sidebarEcommerce" class="side-nav-link collapsed">
                    <i class="uil-store"></i>
                    <span> Sản Phẩm </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProduct">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('product.index') }}">Thêm Sản Phẩm</a>
                        </li>
                        <li>
                            <a href="">Chi Tiết Sản Phẩm</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCategory" aria-expanded="true"
                    aria-controls="sidebarCategory" class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Danh Mục Sản Phẩm </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('category.index') }}">
                                <i>
                                    <p>Danh Mục</p>
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>

            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCategory" aria-expanded="true"
                    aria-controls="sidebarCategory" class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Menus </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('menu.index') }}">Menus</a>
                        </li>
                    </ul>
                </div>

            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="true" aria-controls="sidebarEmail"
                    class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Đơn Hàng </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="">Đơn Hàng</a>
                        </li>
                        <li>
                            <a href="">Chi Tiết Đơn Hàng</a>
                        </li>
                        <li>
                            <a href="">Giỏ Hàng</a>
                        </li>
                        <li>
                            <a href="">Thanh Toán</a>
                        </li>
                    </ul>
                </div>

            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="true" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Users </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="">Customer</a>
                        </li>
                        <li>
                            <a href="">Sallers</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
