@extends('main')

@section('head')

@endsection

@section('content')
    <div class="container mt-1 sticky ">
        <!-- Nav tabs -->
        <ul class="list-group">
            <li>
                <a class="hoacuc list-group-item list-group-item-action" href="{{asset('../public/page/ynghiahoa/HoaDongTien?type=ynghia&mean=hoacuc')}}">Hoa Đồng Tiền</a>
            </li>
            <li>
                <a class="hoahuongduong list-group-item list-group-item-action" href="{{asset('../public/page/ynghiahoa/HoaHuongDuong?type=ynghia&mean=hoahuongduong')}}">Hoa Hướng Dương</a>
            </li>
            <li>
                <a class="hoalan list-group-item list-group-item-action" href="{{asset('../public/page/ynghiahoa/HoaLan?type=ynghia&mean=hoalan')}}">Hoa Lan</a>
            </li>
            <li>
                <a class="hoahong list-group-item list-group-item-action" href="{{asset('../public/page/ynghiahoa/HoaHong?type=ynghia&mean=hoahong')}}">Hoa Hồng</a>
            </li>
        </ul>
    </div>

    @yield('phanloai')
@endsection

@section('footer')

    <script src="{{asset('../public/loaihoa/js/bootstrap.min.js')}}"></script>

@endsection
