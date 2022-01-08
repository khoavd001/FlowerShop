@extends('main')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

    <div class="container__flower-list" style="margin-top: 0;">
        <h1 class="container__flower-list-tittle">KHUYẾN MÃI</h1>
        {!! \App\Helper\Home::divKM1($Bohoa) !!}
        {!! \App\Helper\Home::divKM2($Listhoa) !!}
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider khuyenmai">
                {!! \App\Helper\Home::divKM3($Slidehoa) !!}

            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="prev"><i class="far fa-angle-left"></i></li>
                    <li class="next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container__flower-list">
        <h1 class="container__flower-list-tittle">HOA TƯƠI</h1>
        {!! \App\Helper\Home::divHT1($BohoaHT) !!}
        {!! \App\Helper\Home::divHT2($ListhoaHT) !!}
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider hoatuoi">
                {!! \App\Helper\Home::divHT3($SlidehoaHT) !!}
            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="hoa-tuoi-prev"><i class="far fa-angle-left"></i></li>
                    <li class="hoa-tuoi-next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container__flower-list">
        <h1 class="container__flower-list-tittle">HOA GIÁNG SINH</h1>
        {!! \App\Helper\Home::divHT1($BohoaGS) !!}
        {!! \App\Helper\Home::divHT2($ListhoaGS) !!}
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider hoagiangsinh">
                {!! \App\Helper\Home::divHT3($SlidehoaGS) !!}
            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="hoa-giang-sinh-prev"><i class="far fa-angle-left"></i></li>
                    <li class="hoa-giang-sinh-next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container__flower-list">
        <h1 class="container__flower-list-tittle">HOA TRI ÂN</h1>
        {!! \App\Helper\Home::divTA1($BohoaTA) !!}
        {!! \App\Helper\Home::divTA2($ListhoaTA) !!}
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider hoatrian">
                {!! \App\Helper\Home::divTA3($SlidehoaTA) !!}
            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="hoa-tri-an-prev"><i class="far fa-angle-left"></i></li>
                    <li class="hoa-tri-an-next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container__flower-list" style = "margin-bottom: 30px">
        <h1 class="container__flower-list-tittle">HOA GẶP MẶT BẠN BÈ</h1>
        {!! \App\Helper\Home::divF1($BohoaF) !!}
        {!! \App\Helper\Home::divF2($ListhoaF) !!}
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider hoafriend">
                {!! \App\Helper\Home::divF3($SlidehoaF) !!}
            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="hoa-friend-prev"><i class="far fa-angle-left"></i></li>
                    <li class="hoa-friend-next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>
    </div>

@endsection

@section('footer')

@endsection
