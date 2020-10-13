<?php
$general = \App\Storage::where('key', 'thongtinchung')->first();
$hotline = '096.247.1688';
$email = 'truongtinlogistics@gmail.com';
$facebook = '';
if ($general && $general->value) {
    $config = json_decode($general->value);
    try {
        $hotline = $config->hotline;
        $email = $config->email;
        $facebook = $config->facebook;
    } catch (Exception $e) {

    }
}
?>

<footer class="footer-wrapper">
    <div class="main-footer enable-gradient">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="widget-contact">
                        <div class="widget-title">
                            <h4 class="title">Thông tin liên hệ</h4>
                        </div>
                        <div class="item-list">
                            @foreach(\App\Thongtinkho::all() as $kho)
                                <div class="item">
                                    <div class="address">
                                        <h5>{{$kho->name}}</h5>
                                        <i class="bx bx-home-alt"></i>
                                        <div class="address-content">
                                            <p>{{$kho->address}}</p>
                                        </div>
                                    </div>
                                    <div class="phone"><i class="bx bx-phone-call"></i>{{$kho->phone}}</div>
                                    <div class="email">
                                        <i class="bx bx-envelope"></i>
                                        <a href="mailto:{{$kho->email}}">{{$kho->email}}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="row">
                        <div class="d-flex menu-col-2 col-12">
                            <div class="widget-menu-1 flex-50">
                                <div class="widget-title">
                                    <h4 class="title">Về Chúng Tôi</h4>
                                </div>
                                <div class="menu-ve-chung-toi-container">
                                    <ul id="footer-menu-1" class="footer-menu-1 list-style-type">
                                        <li id="menu-item-293" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-293"><a href="/">Trang chủ</a></li>
                                        <li id="menu-item-293" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-293"><a href="/gioi-thieu">Giới Thiệu</a></li>
                                        <li id="menu-item-294" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-294"><a href="/chinh-sách">Chính sách</a></li>
                                        <li id="menu-item-295" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-295"><a href="/bang-gia">Bảng giá</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-menu-2 flex-50">
                                <div class="widget-title">
                                    <h4 class="title">Theo dõi mã vận đơn</h4>
                                </div>
                                <div class="menu-cham-soc-khach-hang-container">
                                    <ul id="footer-menu-2" class="footer-menu-2 list-style-type">
                                        @foreach(\App\Vantaihang::all() as $menu)
                                            <li id="menu-item-298" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-298"><a target="_blank" href="{{$menu->link}}">{{$menu->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="widget-fanpage">
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href={{$facebook}}&amp;tabs&amp;width=340&amp;height=230&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="340" height="230" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="mb-0">Copyright by Trường Tín © <?php echo date("Y"); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
