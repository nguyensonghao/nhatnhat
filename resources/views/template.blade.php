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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{ asset('public/css/truongtin.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header-nav">
        @include('components.header-top')
        @include('components.header')
    </header>
    <main id="main" class="main-content home" style="padding-top: 0">
        <section class="extension-wrapper">
            <div class="slider-custom">
                <div><img src="public/images/bg-extension.jpg" alt="Trường Tín"/></div>
                <div><img src="public/images/bg-extension.jpg" alt="Trường Tín"/></div>
                <div><img src="public/images/bg-extension.jpg" alt="Trường Tín"/></div>
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
    @include('components.footer')
</body>
<script src="{{ asset('public/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('public/js/truongtin.js') }}"></script>
</html>
