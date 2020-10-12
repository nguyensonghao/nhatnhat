@extends('layout')
@section('title', 'Trường Tín')
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
        <div class="services">
            <p class="title">DỊCH VỤ</p>
            <div class="list-service">
                <div class="service-item">
                    <div class="service-item-heaader">
                        <img src="https://vanchuyenphongvu.vn/wp-content/uploads/2019/08/icon-service-2.png" alt=""/>
                        <p class="capture">VẬN CHUYỂN HÀNG TRUNG – VIỆT</p>
                    </div>
                    <div class="service-item-content">
                        <p class="sub-capture">Tối ưu quy trình vận chuyển Trung – Việt với hệ thống kho bãi tiện nghi, đưa phí vận chuyển về mức thấp trên thị trường.</p>
                        <ul>
                            <li>Hàng về sau 2-3 ngày</li>
                            <li>Đền 100% nếu mất/vỡ do vận chuyển</li>
                            <li>Hệ thống kho bãi quy mô</li>
                        </ul>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-item-heaader">
                        <img src="https://vanchuyenphongvu.vn/wp-content/uploads/2019/08/icon-service-3.png" alt=""/>
                        <p class="capture">DỊCH VỤ ĐỔI TIỀN</p>
                    </div>
                    <div class="service-item-content">
                        <p class="sub-capture">Hỗ trợ quý khách hàng nạp tiền vào tài khoản Alipay nhanh chóng, an toàn. Đổi tiền Trung – Việt tỷ giá thấp.</p>
                        <ul>
                            <li>Nạp tiền nhanh chóng, tiện lợi</li>
                            <li>Phí dịch vụ thấp nhất thị trường</li>
                            <li>Tỷ giá thấp</li>
                        </ul>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-item-heaader">
                        <img src="https://vanchuyenphongvu.vn/wp-content/uploads/2019/08/icon-service-4.png" alt=""/>
                        <p class="capture">DỊCH VỤ DẪN KHÁCH ĐI ĐÁNH HÀNG</p>
                    </div>
                    <div class="service-item-content">
                        <p class="sub-capture">Phiên dịch thông thạo các địa chỉ nhập hàng uy tín. Ghép nhóm đánh hàng tiết kiệm chi phí cho các chủ thể kinh doanh</p>
                        <ul>
                            <li>70% nhân sự là người Việt ở Trung Quốc lâu năm</li>
                            <li>Quan hệ tốt với các xưởng nhập hàng</li>
                            <li>Thông thạo địa hình các chợ nhập hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('components.modal')
@endsection
