<div class="main-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="header-left col-8 col-md-3">
                <div class="logo">
                    <a href="/" title="Trang chủ">
                        <img src="public/images/logo_china.png" alt="Vận chuyển hàng Trung Quốc">
                    </a>
                </div>
            </div>
            <div class="header-right col-4 col-md-9">
                <nav class="header-menu">
                    <ul id="main-menu" class="main-menu">
                        <li class="{!! (Route::is('home') ? 'active' : '') !!} menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-93">
                            <a href="/" aria-current="page">Trang Chủ</a>
                        </li>
                        <li class="{!! (Route::is('webgioithieu') ? 'active' : '') !!} menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-93">
                            <a href="/gioi-thieu" aria-current="page">Giới thiệu</a>
                        </li>
                        <li class="{!! (Route::is('webbanggia') ? 'active' : '') !!} menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-93">
                            <a href="/bang-gia" aria-current="page">Bảng Giá</a>
                        </li>
                        <li class="{!! (Route::is('webchinhsach') ? 'active' : '') !!} menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-93">
                            <a href="/chinh-sach" aria-current="page">Chính Sách</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-93">
                            <a aria-current="page">Theo Dõi Mã Vận Đơn</a>
                            <ul class="sub-menu">
                                @foreach(\App\Vantaihang::all() as $menu)
                                    <li><a target="_blank" href="{{$menu->link}}">{{$menu->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="br-icon-menu">
                    <i class="bx bx-menu"></i>
                </div>
            </div>
        </div>
    </div>
</div>
