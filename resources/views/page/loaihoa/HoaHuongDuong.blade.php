@extends('page.loaihoa.LoaiHoa')

@section('head')
    <link rel="stylesheet" href="{{asset('../public/loaihoa/css/main.css')}}">
@endsection

@section('phanloai')

    <div class="container mt-3">
        <h1>Bó hoa</h1>
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider bohoa">
                {!! \App\Helper\Loaihoa::slideBHHD($BHHuongDuong) !!}
            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="HH-BH-prev"><i class="far fa-angle-left"></i></li>
                    <li class="HH-BH-next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>
        <h1>Giỏ hoa</h1>
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider giohoa">
                {!! \App\Helper\Loaihoa::slideGHHD($GHHuongDuong) !!}
            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="giohoa-prev"><i class="far fa-angle-left"></i></li>
                    <li class="giohoa-next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>
        <h1>Hộp hoa</h1>
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider hophoa">
                {!! \App\Helper\Loaihoa::slideHHHD($HHHuongDuong) !!}
            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="hophoa-prev"><i class="far fa-angle-left"></i></li>
                    <li class="hophoa-next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>
        <h1>Chúc mừng</h1>
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider chucmung">
                {!! \App\Helper\Loaihoa::slideCMHD($CMHuongDuong) !!}
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
    <script src="{{asset('../public/loaihoa/js/HoaHuongDuong/main.js')}}"></script>

    <script src="{{asset('../public/loaihoa/js/bootstrap.min.js')}}"></script>

@endsection

