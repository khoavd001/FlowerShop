@extends('main')

@section('head')
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}"></script>
    <link href="{{asset('../public/css/main.css')}}"/>
@endsection

@section('content')
{{--    Menu--}}
    <div class="container mt-1 ">
        <!-- Nav tabs -->
        <ul class="list-group">
            <li>
                <a class="hoahong list-group-item list-group-item-action" href="{{asset('/page/loaihoa/HoaHong?type=loaihoa&flower=hoahong')}}" >Hoa Hồng</a>
            </li>
            <li>
                <a class="hoahuongduong list-group-item list-group-item-action" href="{{asset('/page/loaihoa/HoaHuongDuong?type=loaihoa&flower=hoahuongduong')}}" >Hoa Hướng Dương</a>
            </li>
            <li>
                <a class="hoalan list-group-item list-group-item-action" href="{{asset('/page/loaihoa/HoaLan?type=loaihoa&flower=hoalan')}}" >Hoa Lan</a>
            </li>
            <li>
                <a class="hoadongtien list-group-item list-group-item-action" href="{{asset('/page/loaihoa/HoaDongTien?type=loaihoa&flower=hoadongtien')}}" >Hoa Đồng Tiền</a>
            </li>
        </ul>
    </div>

{{--    Slide--}}
    <div class="slide mt-5" align="center">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../../img/loaiHoa/slide/slide01.png" alt="First slide"/>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../img/loaiHoa/slide/slide02.png" alt="Second slide"/>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../img/loaiHoa/slide/slide03.png" alt="Third slide"/>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../img/loaiHoa/slide/slide04.png" alt="Third slide"/>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../img/loaiHoa/slide/slide05.png" alt="Third slide"/>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../img/loaiHoa/slide/slide06.png" alt="Third slide"/>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
{{--    end slide--}}

    @yield('phanloai')

@endsection

@section('footer')

    <script src="{{asset('../public/loaihoa/js/bootstrap.min.js')}}"></script>

@endsection
