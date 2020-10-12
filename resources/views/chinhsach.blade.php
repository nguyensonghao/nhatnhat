@extends('layout')
@section('title', 'Chính sách')
@section('content')
    <main id="home" class="chinh-sach-page">
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
        </div>
        <div class="sec-above">
            <h3 class="tt-txt">
                <span id="ContentPlaceHolder1_lblTitle">Chính sách</span></h3>
            <div class="line-br">
                <span class="line__icon"></span>
            </div>
        </div>
        <div class="chinhsach-content">
            {!! $content !!}
        </div>
    </main>
@endsection
