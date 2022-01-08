@extends('page.loaihoa.LoaiHoa')

@section('head')
    <link rel="stylesheet" href="{{asset('../public/loaihoa/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('https://pro.fontawesome.com/releases/v5.10.0/css/all.css')}}" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css')}}" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css')}}" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer">
@endsection

@section('phanloai')

    <div class="container mt-3">
        <h1>Bó hoa</h1>
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider bohoa">
                {!! \App\Helper\Loaihoa::slideBHDT($BHDongTien) !!}
            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="DT-prev"><i class="far fa-angle-left"></i></li>
                    <li class="DT-next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>

        <h1>Giỏ hoa</h1>
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider giohoa">
                {!! \App\Helper\Loaihoa::slideGHDT($GHDongTien) !!}
            </div>
            <div class="flower-list--slick-slider-paginator-arrow">
                <ul>
                    <li class="giohoa-prev"><i class="far fa-angle-left"></i></li>
                    <li class="giohoa-next"><i class="far fa-angle-right"></i></li>
                </ul>
            </div>
        </div>

        <h1>Lẵng hoa</h1>
        <div class="slick-slider-wrapper">
            <div class="container__flower-list-slick-slider hophoa">
                {!! \App\Helper\Loaihoa::slideLHDT($LHDongTien) !!}
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
                {!! \App\Helper\Loaihoa::slideCMDT($CMDongTien) !!}
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
    <script src="{{asset('../public/loaihoa/js/HoaDongTien/main.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js ')}}" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js ')}}" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script src="{{asset('../public/loaihoa/js/bootstrap.min.js')}}"></script>

@endsection

