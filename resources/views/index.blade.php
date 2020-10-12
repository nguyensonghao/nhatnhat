@extends('layout')
@section('title', 'Nhất nhất')
@section('content')
    <main id="home">
        <div class="banner">
            <div class="sticky">
                <div class="all" style="width: 100%;">
                    <ul class="stick-announ" style="display: none">
                    </ul>
                    <p class="marquee">
                        <span class="item-marquee">
                            <a href="#" class="">Những Gì Bạn Cần Chúng Tôi Có  -  Những gì Chúng Tôi Không Có Bạn Không Cần</a>
                        </span>
                        <span class="item-marquee">
                            <a href="#" class="">Cảm    Ơn    Quý    Khách    Đã    Sử    Dụng    Dịch    Vụ    Của    Chúng    Tôi .  </a>
                        </span>
                    </p>
                </div>
            </div>
            <div class="dark-overlay"></div>
            <div class="banner-content">
                <div class="all">
                    <div class="bn__header">
                        <h1 class="hd" style="font-size: 35px; color: #fff">
                            MỘT CHỮ TÍN - VẠN NIỀM TIN
                        </h1>
                    </div>
                    <span class="line-br"></span>
                    <div class="addon-button">
                        <p class="button-title" style="color: #fff">Cài đặt công cụ</p>
                        <a href="https://chrome.google.com/webstore/detail/c%C3%B4ng-c%E1%BB%A5-%C4%91%E1%BA%B7t-h%C3%A0ng-c%E1%BB%A7a-nh%E1%BA%A5t/mibogeiokpajieffeflbgkjoeokdhcdn" target="_blank" class="mn-btn gg-btn"><i class="fab fa-chrome"></i>Chrome</a>
                        <a href="https://chrome.google.com/webstore/detail/c%C3%B4ng-c%E1%BB%A5-%C4%91%E1%BA%B7t-h%C3%A0ng-c%E1%BB%A7a-nh%E1%BA%A5t/mibogeiokpajieffeflbgkjoeokdhcdn" target="_blank" class="mn-btn cc-btn"><i class="fab fa-chrome"></i>Cốc cốc</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="present">
            <div class="all">
                <ul class="ps-wrap">
                    <li class="ps__child">
                        <div class="present-card">
                            <div class="img">
                                <img src="/public/images/present-icon1.png" alt="">
                            </div>
                            <div class="ct">
                                <h4 class="hd">5</h4>
                                <p class="sub-hd">Năm kinh nghiệm</p>
                            </div>
                        </div>
                    </li>
                    <li class="ps__child">
                        <div class="present-card">
                            <div class="img">
                                <img src="/public/images/present-icon2.png" alt="">
                            </div>
                            <div class="ct">
                                <h4 class="hd">2,221</h4>
                                <p class="sub-hd">Khách hàng</p>
                            </div>
                        </div>
                    </li>
                    <li class="ps__child">
                        <div class="present-card">
                            <div class="img">
                                <img src="/public/images/present-icon3.png" alt="">
                            </div>
                            <div class="ct">
                                <h4 class="hd">6,288</h4>
                                <p class="sub-hd">Đơn hàng</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="step-order">
            <div class="all">
                <div class="sec100-wrap">
                    <div class="sec40-left">
                        <div class="sec-title">
                            <h2 class="hd">Quy trình đặt hàng</h2>
                            <p>Businesses often become known today through effective marketing. The marketing...</p>
                        </div>
                        <ul class="list-navct">
                            <li class="navct-item active">
                                <a href="#order1" step-nav="#order1" class="navct-link">Đăng ký tài khoản</a>
                            </li>
                            <li class="navct-item">
                                <a href="#order2" step-nav="#order2" class="navct-link">Cài đặt công cụ mua hàng</a>
                            </li>
                            <li class="navct-item">
                                <a href="#order3" step-nav="#order3" class="navct-link">Chọn hàng và thêm vào giỏ</a>
                            </li>
                            <li class="navct-item">
                                <a href="#order4" step-nav="#order4" class="navct-link">Gửi đơn hàng</a>
                            </li>
                            <li class="navct-item">
                                <a href="#order5" step-nav="#order5" class="navct-link">Đặt cọc tiền hàng</a>
                            </li>
                            <li class="navct-item">
                                <a href="#order6" step-nav="#order6" class="navct-link">Gửi hàng và thanh toán</a>
                            </li>
                        </ul>
                    </div>
                    <span class="line-devide">
                            <span class="line-top"></span>
                            <span class="line-bot"></span>
                        </span>
                    <div class="sec60-right">
                        <div class="nav-content-wrap">

                            <div class="navct-desc" id="order1">
                                <div class="icon">
                                    <img src="/public/images/step-icon1.png" alt="">
                                </div>
                                <h3 class="hd">Đăng ký tài khoản</h3>
                                <p>
                                    Nhập các thông tin cá nhân bắt buộc vào ô, lưu ý nhập chính xác các thông tin để đảm bảo cho việc quản lí đơn hàng và nhận hàng của bạn.
                                </p>
                                <a href="/dang-ky" class="mn-btn btn-bg">Đăng ký</a>
                                <div class="img">
                                    <img src="/public/images/step-img1.png" alt="">
                                </div>
                            </div>
                            <div class="navct-desc" id="order2" style="display: none;">
                                <div class="icon">
                                    <img src="/public/images/services-icon1.png" alt="">
                                </div>
                                <h3 class="hd">Cài đặt công cụ mua hàng</h3>
                                <p>
                                    Click vào cài đặt công cụ đặt hàng của Nhất Nhất Logistics. Công cụ hỗ trợ đặt hàng các website taobao, tmall, 1688.
                                </p>
                                <div class="img">
                                    <img src="/public/images/step-img1.png" alt="">
                                </div>
                            </div>
                            <div class="navct-desc" id="order3" style="display: none;">
                                <h3 class="hd">CHỌN HÀNG VÀ THÊM VÀO GIỎ</h3>
                                <p>
                                    Truy cập vào các trang mua sắm Taobao.com, Tmall.com, 1688.com … chọn hàng và thêm hàng vào giỏ.
                                </p>
                                <div class="img">
                                    <img src="/public/images/step-img1.png" alt="">
                                </div>
                            </div>
                            <div class="navct-desc" id="order4" style="display: none;">
                                <h3 class="hd">GỬI ĐƠN HÀNG</h3>
                                <p>
                                    Quay lại website nhatnhatlogistics.com và kiểm tra giỏ hàng Click vào “Gửi đơn hàng” để tạo đơn hàng,chờ xác nhận đặt hàng thành công.
                                </p>
                                <div class="img">
                                    <img src="/public/images/step-img1.png" alt="">
                                </div>
                            </div>
                            <div class="navct-desc" id="order5" style="display: none;">
                                <h3 class="hd">ĐẶT CỌC TIỀN HÀNG</h3>
                                <p>
                                    Kiểm tra đơn hàng và đặt cọc tiền hàng qua hình thức chuyển khoản hoặc trực tiếp tại các văn phòng giao dịch gần nhất của Nhất Nhất Logistics.
                                </p>
                                <div class="img">
                                    <img src="/public/images/step-img1.png" alt="">
                                </div>
                            </div>
                            <div class="navct-desc" id="order6" style="display: none;">
                                <h3 class="hd">GỬI HÀNG VÀ THANH TOÁN</h3>
                                <p>
                                    Quý khách nhận được thông báo hàng về Việt Nam. Quý khách thanh toán số tiền còn  thiếu qua hình thức chuyển khoản hoặc trực tiếp. Sau khi thanh toán quý khách hàng có thể yêu cầu ship hàng hoặc trực tiếp nhận hàng tại kho của Nhất Nhất Logistics.
                                </p>
                                <div class="img">
                                    <img src="/public/images/step-img1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="benefits">
            <div class="all">
                <div class="sec-title">
                    <h2 class="hd">Quyền lợi của
                        <br>
                        khách hàng</h2>
                    <p>Businesses often become known today through effective marketing. The marketing...</p>
                </div>
                <ul class="list-benefits">
                    <li class="benefit__item">
                        <div class="benefit-card">
                            <div class="img">
                                <a href="javascript:;">
                                    <img src="/public/images/benefit-img1.jpg" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="hd"><a href="">Khách hàng thân thiết</a></h4>
                                <p>
                                    Tích điểm thành viên từ mỗi đơn hàng và nhận được ưu đãi về phí và nhiều ưu đãi khác cho các đơn sau
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="benefit__item">
                        <div class="benefit-card">
                            <div class="img">
                                <a href="javascript:;">
                                    <img src="/public/images/benefit-img2.jpg" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="hd"><a href="">Marketing &amp; Bán hàng</a></h4>
                                <p>
                                    Hỗ trợ Quý khách kết nối tới các giải pháp Marketing &amp; bán hàng, cung cấp hệ sinh thái đầy đủ từ nhập hàng tới bán hàng và phân phối.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="benefit__item">
                        <div class="benefit-card">
                            <div class="img">
                                <a href="javascript:;">
                                    <img src="/public/images/benefit-img3.jpg" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="hd"><a href="">Ưu đãi theo sản lượng tháng</a></h4>
                                <p>
                                    Hoàn phí vận chuyển theo sản lượng đặt hàng theo từng tháng
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection
