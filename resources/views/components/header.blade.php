<header id="header">
    <div class="all">
        <div class="hd-main">
            <div class="logo">
                <div class="img">
                    <a href="/"><img src="/public/images/header-logo.png" alt="header logo"></a>
                </div>
            </div>
            <div class="hd-right">
                <div class="hd-top">
                    <div class="hdt__info">
                        <div class="hdt__info-block">
                            <div class="img">
                                <i class="fas fa-phone" style="font-size: 30px;margin: 0px;color: #a2eb3a;"></i>
                            </div>
                            <div class="ct">
                                <p class="tt">CSKH:</p>
                                <p><a href="tel:0926886828">0926886828</a></p>
                            </div>
                        </div>
                        <div class="hdt__info-block">
                            <div class="img">
                                <i class="fas fa-phone-volume" style="font-size: 30px;margin: 0px;color: #a2eb3a;"></i>
                            </div>
                            <div class="ct">
                                <p class="tt">Hotline:</p>
                                <p><a href="tel:0916886221">0916886221</a></p>
                            </div>
                        </div>
                        <div class="hdt__info-block">
                            <div class="img">
                                <img src="/public/images/hd-top-icon3.png" alt="">
                            </div>
                            <div class="ct"><p class="tt">Giờ Làm Việc&nbsp;</p><p>9h00 - 19h00</p></div>
                        </div>
                    </div>
                    <div style="margin-left:10px;">
                        <div class="ct">
                            <a href="https://www.facebook.com/odervavanchuyentrungviet/" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.youtube.com/channel/UCi3H4erxsvIcteyC099meww" target="_blank" class="social-icon"><i class="fab fa-youtube"></i></a>
                            <a href="https://twitter.com/Nhatnhatlogist1" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/nhatnhatlogistics/" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="nhatnhatlogistics@gmail.com" target="_blank" class="social-icon"><i class="fab fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="hd-bot">
                    <div class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <div class="nav-wrap">
                        <div class="nav-overlay"></div>
                        <ul class="nav-ul">
                            <li {!! (Route::is('home') ? 'class="current-menu-item"' : '') !!}>
                                <a href="/">Trang chủ</a>
                            </li>
                            <li {!! (Route::is('webbanggia') ? 'class="current-menu-item"' : '') !!}>
                                <a href="/bang-gia">Bảng giá</a>
                            </li>
                            <li {!! (Route::is('webchinhsach') ? 'class="current-menu-item"' : '') !!}>
                                <a href="/chinh-sach">Chính sách</a>
                            </li>
                            <li class="taichinh has-dropdown">
                                <a href="/theo-doi-mvd">Theo dõi MVĐ</a>
                                <ul class="dropdown-menu">
                                    @foreach(\App\Vantaihang::all() as $menu)
                                        <li><a target="_blank" href="{{$menu->link}}">{{$menu->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
