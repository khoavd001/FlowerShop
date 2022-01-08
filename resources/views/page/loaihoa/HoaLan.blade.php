@extends('page.loaihoa.LoaiHoa')

@section('head')
    <link rel="stylesheet" href="{{asset('../public/loaihoa/css/main.css')}}">
@endsection

@section('phanloai')

    <div class="container mt-3">
        <h1>Giỏ hoa</h1>
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider bohoa">
                {!! \App\Helper\Loaihoa::slideGHL($GHLan) !!}
            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="HL-prev"><i class="far fa-angle-left"></i></li>
                    <li class="HL-next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>
        <h1>Lan Hồ Điệp</h1>
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider giohoa">
                {!! \App\Helper\Loaihoa::slideHD($HoDiep) !!}
            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="giohoa-prev"><i class="far fa-angle-left"></i></li>
                    <li class="giohoa-next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>
        <h1>Lan Đột Biến</h1>
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider hophoa">
                {!! \App\Helper\Loaihoa::slideDB($DotBien) !!}
            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="hophoa-prev"><i class="far fa-angle-left"></i></li>
                    <li class="hophoa-next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>
        <h1>Lan Rừng</h1>
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider chucmung">
                {!! \App\Helper\Loaihoa::slideLR($LanRung) !!}
            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="chucmung-prev"><i class="far fa-angle-left"></i></li>
                    <li class="chucmung-next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>

    </div>

@endsection

@section('footer')
    <script src="{{asset('../public/loaihoa/js/HoaLan/main.js')}}"></script>

    <script src="{{asset('../public/loaihoa/js/bootstrap.min.js')}}"></script>

@endsection

