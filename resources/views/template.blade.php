<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="trường tín, truongtin, logistics, truongtinlogistics, vận chuyển, hàng nhập khẩu">
    <meta name="keywords" content="trường tín, truongtin, logistics, truongtinlogistics, vận chuyển, hàng nhập khẩu">
    <meta property="og:type" content="website">
    <meta property="og:image">
    <meta name="copyright" content="Trường Tín logistics">
    <meta name="author" content="Trường Tín logistics">
    <meta property="og:site_name" content="truongtinlogistics.com">
    <meta property="og:description" content="trường tín, truongtin, logistics, truongtinlogistics, vận chuyển, hàng nhập khẩu">
    <title>@yield('title')</title>
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/truongtin.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header-nav">
        <div class="header-top header-top-wrapper">
            <div class="container">
                <div class="row">
                    <div class="header-top-left col-12 col-md-6">
                        <div class="exchange-rate">
                            <i class="bx bxs-dollar-circle"></i>
                            <p>Tỷ giá: <span>3.560</span></p>
                        </div>
                        <div class="hotline">
                            <i class="bx bx-support"></i>
                            <p>Hotline: <span>096.247.1688</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-93"><a href="/" aria-current="page">Trang Chủ</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-554"><a href="/gioi-thieu-ve-nhap-hang-china/">Giới thiệu</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-94"><a href="/danh-muc-dich-vu">Dịch Vụ</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-382"><a href="/bang-gia-van-chuyen/">Bảng Giá</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-99"><a href="/huong-dan-dat-hang-tren-website-nhap-hang-china/">Hướng Dẫn</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-381"><a href="/danh-muc-kinh-nghiem">Kinh nghiệm</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-98"><a href="/danh-muc-chinh-sach">Chính Sách</a></li>
                            </ul>
                        </nav>
                        <div class="br-icon-menu">
                            <i class="bx bx-menu"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main id="main" class="main-content home" style="padding-top: 0">
        <section class="extension-wrapper enable-gradient" style="background-image: url(public/images/bg-extension.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">

                    </div>
                </div>
            </div>
        </section>
        <section class="process-wrapper">
            <div class="container">
                <div class="inline-hr"></div>
                <div class="row">
                    <div class="column col-12 col-sm-6 col-md-4 cols-lg-5">
                        <div class="item">
                            <div class="item-info">
                                <div class="process-icon"><img src="public/images/tracking.png" alt="Tìm kiếm <br/>sản phẩm"></div>
                                <div class="process-name"><span>Tìm kiếm <br>sản phẩm</span></div>
                            </div>
                            <div class="steps-process"><img src="public/images/steps.png" alt="steps"></div>
                        </div>
                    </div>
                    <div class="column col-12 col-sm-6 col-md-4 cols-lg-5">
                        <div class="item">
                            <div class="item-info">
                                <div class="process-icon"><img src="public/images/packing-list.png" alt="Tạo<br/> đơn hàng"></div>
                                <div class="process-name"><span>Tạo<br> đơn hàng</span></div>
                            </div>
                            <div class="steps-process"><img src="public/images/steps.png" alt="steps"></div>
                        </div>
                    </div>
                    <div class="column col-12 col-sm-6 col-md-4 cols-lg-5">
                        <div class="item">
                            <div class="item-info">
                                <div class="process-icon"><img src="public/images/delivery.png" alt="Đặt cọc<br/> tiền hàng"></div>
                                <div class="process-name"><span>Đặt cọc<br> tiền hàng</span></div>
                            </div>
                            <div class="steps-process"><img src="public/images/steps.png" alt="steps"></div>
                        </div>
                    </div>
                    <div class="column col-12 col-sm-6 col-md-4 cols-lg-5">
                        <div class="item">
                            <div class="item-info">
                                <div class="process-icon"><img src="public/images/delivery-truck.png" alt="Theo dõi đơn hàng"></div>
                                <div class="process-name"><span>Theo dõi đơn hàng</span></div>
                            </div>
                            <div class="steps-process"><img src="public/images/steps.png" alt="steps"></div>
                        </div>
                    </div>
                    <div class="column col-12 col-sm-6 col-md-4 cols-lg-5">
                        <div class="item">
                            <div class="item-info">
                                <div class="process-icon"><img src="public/images/package.png" alt="Thanh toán &amp; nhận hàng"></div>
                                <div class="process-name"><span>Thanh toán &amp; nhận hàng</span></div>
                            </div>
                            <div class="steps-process"><img src="public/images/checked.png" alt="steps"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-commitment-wrapprt enable-bg-color" style="background-image: url(public/images/world-map.png);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-title custom">
                            <h2 class="title">CAM KẾT DỊCH VỤ VẬN CHUYỂN </h2>
                            <p class="subtitle">Nhập hàng China luôn luôn cố gắng không ngừng nghỉ nhằm mang lại cho khách hàng dịch vụ nhập hàng tốt nhất, uy tín nhất, mang lại sự hài lòng khi khách hàng sử dụng dịch vụ nhập hàng của chúng tôi.</p>
                        </div>
                    </div>
                    <div class="commitment-content">
                        <div class="col-12 col-md-10 offset-md-1">
                            <ul class="commitment-list">
                                <li>
                                    <h5><i class="bx bx-chevrons-right"></i>CAM KẾT ĐẶT HÀNG</h5>
                                    <p>Đền bù 100% tiền hàng nếu Nhập Hàng China đặt sai link của quý khách. Cam kết mua hàng trong vòng 24h kể từ lúc đơn hàng được đặt cọc.</p>
                                </li>
                                <li>
                                    <h5><i class="bx bx-chevrons-right"></i>CAM KẾT BỒI THƯỜNG</h5>
                                    <p>Chúng tôi cam kết đền bù 100% tiền hàng nếu trong quá trình vận chuyển hàng hóa bị thất lạc hoặc hỏng hóc.</p>
                                </li>
                                <li>
                                    <h5><i class="bx bx-chevrons-right"></i>CAM KẾT ĐÚNG GIÁ</h5>
                                    <p>Nhập hàng China cam kết mua đúng giá sản phẩm trên website và đúng phí nội địa trên web không gian dối.</p>
                                </li>
                                <li>
                                    <h5><i class="bx bx-chevrons-right"></i>THỜI GIAN VẬN CHUYỂN</h5>
                                    <p>Nhập Hàng China luôn luôn cố gắng tối ưu từng công đoạn để hàng hóa của quý khách về nhanh nhất, an toàn nhất có thể.</p>
                                </li>
                                <li>
                                    <h5><i class="bx bx-chevrons-right"></i>TỶ GIÁ NHÂN DÂN TỆ</h5>
                                    <p>Tỷ giá công khai minh bạch khớp với hệ thống đặt hàng. Luôn luôn ưu tiên để tỷ giá thấp nhất nhằm mang lại lợi ích tối đa cho khách hàng.</p>
                                </li>
                                <li>
                                    <h5><i class="bx bx-chevrons-right"></i>CAM KẾT HỖ TRỢ</h5>
                                    <p>Nhập hàng China luôn luôn cố gắng phục vụ  24/7 nhằm mang lại dịch vụ tốt nhất tới quý khách hàng.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div id="testimonials" class="testimonials-wrapper">
                            <div class="heading-title">
                                <h3 class="title">Ý KIẾN KHÁCH HÀNG</h3>
                            </div>
                            <div class="testimonials-content">
                                <div class="row mys-slick slick-initialized slick-slider">
                                    <div class="slick-list draggable">
                                        <div class="slick-track" style="opacity: 1; width: 800px; transform: translate3d(0px, 0px, 0px);">
                                            <div class="slick-slide slick-current slick-active" style="width: 800px;">
                                                <div>
                                                    <div class="item col-12" style="width: 100%; display: inline-block;">
                                                        <div class="item-content">
                                                            <i class="bx bxs-quote-alt-left"></i>
                                                            <blockquote>Khi bắt đầu khởi nghiệp tôi rất mơ hồ về nguồn hàng, không biết tìm nguồn hàng ở đâu rẻ và đẹp để mở shop. Rất may mắn khi thấy bài quảng cáo của Nhập Hàng China trên Facebook và cũng nhờ nhân viên của công ty tư vấn nhiệt tình mà tôi đã tìm được đúng nguồn hàng mà mình mong muốn cho Shop của mình</blockquote>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="item-avt"><img src="https://nhaphangchina.vn/images/chi-nguyen-lan-huong.jpg" alt="Chị Nguyễn Lan Hương"></div>
                                                            <div class="content">
                                                                <h5 class="item-name">Chị Nguyễn Lan Hương</h5>
                                                                <p class="mb-0">Shop Thời Trang</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="support-wrapper">
                            <div class="heading-title">
                                <h3 class="title">HỖ TRỢ KHÁCH HÀNG</h3>
                            </div>
                            <div class="support-content row">
                                <div class="item col-6">
                                    <a href="http://zalo.me/096.247.1688" target="_blank" rel="nofollow">
                                        <img src="https://nhaphangchina.vn/images/zalo.png" alt="Hỗ trợ khách hàng">
                                    </a>
                                    <div class="item-info">
                                        <b>Ms Hương</b>
                                        <p>096.247.1688</p>
                                    </div>
                                </div>
                                <div class="item col-6">
                                    <a href="http://zalo.me/096.827.1688" target="_blank" rel="nofollow">
                                        <img src="https://nhaphangchina.vn/images/zalo.png" alt="Hỗ trợ khách hàng">
                                    </a>
                                    <div class="item-info">
                                        <b>Ms Diệp</b>
                                        <p>096.827.1688</p>
                                    </div>
                                </div>
                                <div class="item col-6">
                                    <a href="http://zalo.me/0979.239.526" target="_blank" rel="nofollow">
                                        <img src="https://nhaphangchina.vn/images/zalo.png" alt="Hỗ trợ khách hàng">
                                    </a>
                                    <div class="item-info">
                                        <b>Ms Thoa</b>
                                        <p>0979.239.526</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-pay-wrapper" style="background-image: url(public/images/crupto.png);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-title custom">
                            <h3 class="title">THÔNG TIN NGÂN HÀNG</h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pay-content row">
                            <div class="item col-12 col-sm-6 col-lg-4">
                                <div class="item-content">
                                    <div class="item-image"><img src="https://nhaphangchina.vn/images/Vietcombank.png" alt="Đặng Anh Tú"></div>
                                    <div class="pay-info">
                                        <h5 class="pay-info-name mt-0">Đặng Anh Tú</h5>
                                        <div class="pay-info-stk"><small>STK:</small>0491000416368</div>
                                        <div class="pay-info-branch"><small>Chi Nhánh:</small>Hà Nội</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-12 col-sm-6 col-lg-4">
                                <div class="item-content">
                                    <div class="item-image"><img src="https://nhaphangchina.vn/images/BIDV.png" alt="Đặng Anh Tú"></div>
                                    <div class="pay-info">
                                        <h5 class="pay-info-name mt-0">Đặng Anh Tú</h5>
                                        <div class="pay-info-stk"><small>STK:</small>12910000225952</div>
                                        <div class="pay-info-branch"><small>Chi Nhánh:</small>Hà Nội</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-12 col-sm-6 col-lg-4">
                                <div class="item-content">
                                    <div class="item-image"><img src="https://nhaphangchina.vn/images/Techcombank.png" alt="Đặng Anh Tú"></div>
                                    <div class="pay-info">
                                        <h5 class="pay-info-name mt-0">Đặng Anh Tú</h5>
                                        <div class="pay-info-stk"><small>STK:</small>19034822822013</div>
                                        <div class="pay-info-branch"><small>Chi Nhánh:</small>Hà Nội</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
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
                                <div class="item">
                                    <div class="address">
                                        <h5>Hà Nội</h5>
                                        <i class="bx bx-home-alt"></i>
                                        <div class="address-content">
                                            <p>Số 6 - Ngõ 4 Kim Đồng - Giáp Bát - Hoàng Mai - Hà Nội</p>
                                        </div>
                                    </div>
                                    <div class="phone"><i class="bx bx-phone-call"></i>096.247.1688 - 096.827.1688 - 0979.239.526</div>
                                    <div class="email"><i class="bx bx-envelope"></i><a href="mailto:ordernhaphangchina@gmail.com">ordernhaphangchina@gmail.com</a></div>
                                </div>
                                <div class="item">
                                    <div class="address">
                                        <h5>Hồ Chí Minh</h5>
                                        <i class="bx bx-home-alt"></i>
                                        <div class="address-content">
                                            <p>49/19 Phạm Văn Bạch - Phường 15 - Q.Tân Bình - TPHCM</p>
                                        </div>
                                    </div>
                                    <div class="phone"><i class="bx bx-phone-call"></i>0971.937.202</div>
                                </div>
                                <div class="item">
                                    <div class="address">
                                        <h5>Trung Quốc</h5>
                                        <i class="bx bx-home-alt"></i>
                                        <div class="address-content">
                                            <p>广西壮族自治区 崇左市 凭祥市 凭祥镇 狮子山路 111</p>
                                        </div>
                                    </div>
                                    <div class="phone"><i class="bx bx-phone-call"></i>0086.1827594.2991</div>
                                </div>
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
                                            <li id="menu-item-293" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-293"><a href="/gioi-thieu-ve-nhap-hang-china/">Giới Thiệu</a></li>
                                            <li id="menu-item-294" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-294"><a href="/danh-muc-huong-dan">Hướng Dẫn</a></li>
                                            <li id="menu-item-295" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-295"><a href="/danh-muc-tin-tuc">Tin Tức</a></li>
                                            <li id="menu-item-296" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-296"><a href="/chinh-sach-bao-mat/">Chính Sách Bảo Mật</a></li>
                                            <li id="menu-item-297" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-297"><a href="/chinh-sach-khieu-nai/">Chính Sách Khiếu Nại</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-menu-2 flex-50">
                                    <div class="widget-title">
                                        <h4 class="title">Chăm Sóc Khách Hàng</h4>
                                    </div>
                                    <div class="menu-cham-soc-khach-hang-container">
                                        <ul id="footer-menu-2" class="footer-menu-2 list-style-type">
                                            <li id="menu-item-298" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-298"><a href="#">Trung tâm trợ giúp</a></li>
                                            <li id="menu-item-299" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-299"><a href="#">Hướng dẫn tạo tài khoản</a></li>
                                            <li id="menu-item-300" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-300"><a href="/huong-dan-dat-hang-tren-website-nhap-hang-china/">Hướng dẫn mua hàng</a></li>
                                            <li id="menu-item-301" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-301"><a href="#">Trả hàng &amp; vận chuyển</a></li>
                                            <li id="menu-item-302" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-302"><a href="#">Các câu hỏi thường gặp</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-socials col-12">
                                <a href="https://www.facebook.com/ordertaobaonhaphangchina/" rel="nofollow" target="_blank"><i class="bx bxl-facebook"></i></a>
                                <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a>
                                <a href="#" target="_blank"><i class="bx bxl-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="widget-fanpage"><iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/ordertaobaonhaphangchina&amp;tabs&amp;width=340&amp;height=230&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="340" height="230" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="mb-0">Copyright by Nhập Hàng China © 2013 - 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
